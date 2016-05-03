<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/26/2016
 * Time: 2:28 PM
 */

include "../private_html/setup.php";

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

//USE FORE EDIT CHARACTERISTIC
//        $query = "SELECT Characteristic_ID, Name FROM characteristic WHERE Category_FK = :shapeID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->execute();
//        $shapeResults = array();
//        if ($statement -> rowCount() > 0){
//            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
//                $charID = $row['Characteristic_ID'];
//                $charName = $row['Name'];
////                $editShapeDescription = $row['Description'];
//
//            }
//        }else{
//            $smarty->assign("error1", 'Database Error');
//        }
//        $smarty->assign("editShapeDescription", $editShapeDescription);


// ------ SELECTING SHAPE FOR ADD CHARACTER
if (isset($_POST["selectCharShape"])) {

    $query = "SELECT Shape_Category_ID, Name FROM shape WHERE Shape_Category_ID = :shapeID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();
    $shapeResults = array();

    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $editShapeID = $row['Shape_Category_ID'];
            $editShapeName = $row['Name'];
//                $editShapeDescription = $row['Description'];

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("charShapeID", $editShapeID);
    $smarty->assign("charShapeName", $editShapeName);




// ------ ADD CHARACTERISTIC ------
} elseif (isset($_POST["addChar"])) {
    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["newCharName"] == "") {
        $errorFlag = true;
        $msg .= "<br>Characteristic Name: empty";
    } else {
        $smarty->assign('newCharName', $_POST["newCharName"]);
    }
    if ($_POST["shapeID"] == "") {
        $errorFlag = true;
        $msg .= "<br>Shape ID: empty";
    } else {
        $smarty->assign('shapeID', $_POST["shapeID"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('admin.tpl');
        exit();
    }

    //------ Query to add characteristic -----

    $query = "INSERT INTO characteristic (Characteristic_ID , Name, Category_FK )
              VALUES (DEFAULT, :newCharName, :shapeID)";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':newCharName', $_POST["newCharName"]);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();

    $msg3 = "Add Successful!";


    // ------ SELECT CHARACTERISTIC FOR ADD CHARACTERISTIC OPTION ------
} elseif (isset($_POST["selectCharOpt"])) {

    $query = "SELECT Characteristic_ID, Name FROM characteristic WHERE Characteristic_ID= :charID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':charID', $_POST["charID"]);
    $statement->execute();
    $charResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $editCharID = $row['Characteristic_ID'];
            $editCharName = $row['Name'];

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("charID", $editCharID);
    $smarty->assign("charName", $editCharName);



    // ------ ADD CHARACTERISTIC OPTION -----
} elseif (isset($_POST["addCharOpt"])) {
    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["charID"] == "") {
        $errorFlag = true;
        $msg .= "<br>Characteristic Association: empty";
    } else {
        //$smarty->assign('charID', $_POST["charID"]);
    }
    if ($_POST["newOptName"] == "") {
        $errorFlag = true;
        $msg .= "<br>New Characteristic Option: empty";
    } else {
        $smarty->assign('newOptName', $_POST["newOptName"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('admin.tpl');
        exit();
    }

    //------ Query to add new characteristic option -----

    $query = "INSERT INTO characteristic_option (Option_ID , Name, Characteristic_FK )
              VALUES (DEFAULT, :newOptName, :charID)";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':newOptName', $_POST["newOptName"]);
    $statement->bindValue(':charID', $_POST["charID"]);
    $statement->execute();

    $msg3 = "Add Successful!";
}elseif (isset($_POST["selectSpecies"])) {

    $query = "SELECT Species_ID, Common_Name, Name_Derivation, Scientific_Name, Phylum, Sp_Order,
                  Family, Comments, Wood_Substrate, Dimensions, Shape_FK  FROM species WHERE Species_ID = :speciesID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':speciesID', $_POST["speciesID"]);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $speciesID = $row['Species_ID'];
            $commonName = $row['Common_Name'];
            $shapeID = $row['Shape_FK'];

            $smarty->assign("speciesID", $speciesID);
            $smarty->assign("commonName", $commonName);
            $smarty->assign("shapeID", $shapeID);

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }

    $query = "SELECT Characteristic_ID, c.Name as Char_Name, Option_ID, o.Name as Opt_Name
	FROM characteristic c JOIN characteristic_option o ON o.Characteristic_FK = Characteristic_ID
	WHERE c.Category_FK = :parameter";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':parameter', $shapeID);
    $stmt->execute();

    $charID = array();
    $varCount = 0;
    $cc = -1;
    $charList = array();

    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        if($cc != $row['Characteristic_ID']) {
            $varCount = $varCount + 1;
            if($cc != - 1) {
                $char['options'] = $opt;
                $charList[$cc] = $char;
            }
            $char = array(
                "ID" => $row['Characteristic_ID'],
                "Name" => $row['Char_Name']
            );
            $opt = array();
            $cc = $row['Characteristic_ID'];
            $charID[$varCount] = $row['Characteristic_ID'];
        }
        $opt[] = array(
            "Opt_ID" => $row['Option_ID'],
            "Opt_Name" => $row['Opt_Name']
        );
    }
    $char['options'] = $opt;
    $charList[$cc] = $char;

    $smarty ->assign("charID", $charID);
    $smarty ->assign("charList", $charList);
}

//------ Build Associative Species Array For Use In Species Selectors------
$query = "SELECT Species_ID, Common_Name FROM species";

$statement = $pdo->prepare($query);
$statement->execute();
$speciesResults = array();
if ($statement->rowCount() > 0) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $speciesResults[$row['Species_ID']] = $row['Common_Name'];
    }
} else {
    $smarty->assign("error1", 'Database Error');
}
$smarty->assign("speciesArray", $speciesResults);

    //------ Build Associative Shape Array for use with Shape Selectors------
    $query = "SELECT Shape_Category_ID, Name FROM shape";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $shapeResults = array();
    if ($statement -> rowCount() > 0){
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    }else{
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);

    //------ Build Associative Characteristic Array for Characteristic Selectors ------
    $query = "SELECT Characteristic_ID, Name FROM characteristic";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $speciesResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $speciesResults[$row['Characteristic_ID']] = $row['Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }

    $smarty->assign("charArray", $speciesResults);
if(isset($msg3)){
    $smarty->assign('success', $msg3);
}

    $smarty->display('addCharacteristic.tpl');


