<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/3/2016
 * Time: 3:16 PM
 */

include "../private_html/setup.php";

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

if (isset($_POST["selectSpecies"])) {

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

$smarty->display('addLinkOption.tpl');