<?php

session_start();
include "../private_html/setup.php";
include_once WEB_PATH . 'CAS_includes/CAS.php';
phpCAS::client(CAS_VERSION_2_0, 'sso.messiah.edu', 443, '/cas/',false);
phpCAS::setNoCasServerValidation();
phpCAS::handleLogoutRequests(false);
phpCAS::forceAuthentication();
$logout_url = "https://sso.messiah.edu/cas/logout";
$_SERVER['REMOTE_USER'] = strtolower(phpCAS::getUser());



//echo strtolower(phpCAS::getUser());

//::getUser();
$sql = "SELECT * FROM Administrator WHERE Username = :e";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":e", strtolower(phpCAS::getUser()));
$stmt->execute();

if($stmt->rowCount() == 0){
    //Jump back to whatever page you’re on
    $smarty->display("index.tpl");
    exit();
} else {
    $_SESSION['admin'] = true;
    //Display to Admin Dashboard tpl
    //echo "You are on the admin Dashboard";

    $smarty->assign("adminActive", "active");
    $smarty->assign("title", "Admin");

    //----- Check if the add admin submit button was hit ----
    } if (isset($_POST["addAdmin"])) {
        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";

        // ------ Input Error Checking ------
        if ($_POST["newAdmin"] == "") {
            $errorFlag = true;
            $msg .= "<br>Shape Admin Email: empty";
        } else {
            $smarty->assign('newAdmin', $_POST["newAdmin"]);
        }

        if ($errorFlag) {
            $msg = $msg . "<br>";
            $smarty->assign('msg', $msg);
            $smarty->display('admin.tpl');
            exit();
        }

        //------ Insert Query -----

        $query = "INSERT INTO Administrator (Admin_ID, Username)
              VALUES (DEFAULT, :newAdmin)";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':newAdmin', $_POST["newAdmin"]);
        $statement->execute();

        $msg3 = "Add Successful!"; }

//    } elseif (isset($_POST["deleteAdmin"])) {
//    $errorFlag = false;
//    $smarty->assign('errorFlag', $errorFlag);
//
//    $msg = "<strong>Missing Information!</strong>";
//
//    // ------ Input Error Checking ------
//    if ($_POST["removeAdmin"] == "") {
//        $errorFlag = true;
//        $msg .= "<br>Error, No Admin Username Was Passed.";
//    } else {
//        $smarty->assign('removeAdmin', $_POST["removeAdmin"]);
//    }
//
//    if ($errorFlag) {
//        $msg = $msg . "<br>";
//        $smarty->assign('msg', $msg);
//        $smarty->display('admin.tpl');
//        exit();
//    }
//
//    //------ Insert Query -----
//
//    $query = "DELETE FROM Administrator WHERE Admin_ID = :removeAdmin";
//
//    $statement = $pdo->prepare($query);
//    $statement->bindValue(':removeAdmin', $_POST["removeAdmin"]);
//    $statement->execute();
//
//    $msg3 = "Removal Successful!";
//}
//all above this is added back in to make delete admin work...................................................................
//    } elseif (isset($_POST["selectCharShape"])) {
//
//        $query = "SELECT Shape_Category_ID, Name FROM shape WHERE Shape_Category_ID = :shapeID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->execute();
//        $shapeResults = array();
//
//        if ($statement->rowCount() > 0) {
//            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//                $editShapeID = $row['Shape_Category_ID'];
//                $editShapeName = $row['Name'];
////                $editShapeDescription = $row['Description'];
//
//            }
//        } else {
//            $smarty->assign("error1", 'Database Error');
//        }
//        $smarty->assign("charShapeID", $editShapeID);
//        $smarty->assign("charShapeName", $editShapeName);
//
//    } elseif (isset($_POST["addChar"])) {
//        $errorFlag = false;
//        $smarty->assign('errorFlag', $errorFlag);
//
//        $msg = "<strong>Missing Information!</strong>";
//
//        // ------ Input Error Checking ------
//        if ($_POST["newCharName"] == "") {
//            $errorFlag = true;
//            $msg .= "<br>Characteristic Name: empty";
//        } else {
//            $smarty->assign('newCharName', $_POST["newCharName"]);
//        }
//        if ($_POST["shapeID"] == "") {
//            $errorFlag = true;
//            $msg .= "<br>Shape ID: empty";
//        } else {
//            $smarty->assign('shapeID', $_POST["shapeID"]);
//        }
//
//        if ($errorFlag) {
//            $msg = $msg . "<br>";
//            $smarty->assign('msg', $msg);
//            $smarty->display('admin.tpl');
//            exit();
//        }
//
//        //------ Insert Query -----
//
//        $query = "INSERT INTO characteristic (Characteristic_ID , Name, Category_FK )
//              VALUES (DEFAULT, :newCharName, :shapeID)";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':newCharName', $_POST["newCharName"]);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->execute();
//
//        $msg3 = "Add Successful!";
//    } elseif (isset($_POST["selectCharOpt"])) {
//
//        $query = "SELECT Characteristic_ID, Name FROM characteristic WHERE Characteristic_ID= :charID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':charID', $_POST["charID"]);
//        $statement->execute();
//        $charResults = array();
//        if ($statement->rowCount() > 0) {
//            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//                $editCharID = $row['Characteristic_ID'];
//                $editCharName = $row['Name'];
//
//            }
//        } else {
//            $smarty->assign("error1", 'Database Error');
//        }
//        $smarty->assign("charID", $editCharID);
//        $smarty->assign("charName", $editCharName);
//
//    } elseif (isset($_POST["addCharOpt"])) {
//        $errorFlag = false;
//        $smarty->assign('errorFlag', $errorFlag);
//
//        $msg = "<strong>Missing Information!</strong>";
//
//        // ------ Input Error Checking ------
//        if ($_POST["charID"] == "") {
//            $errorFlag = true;
//            $msg .= "<br>Characteristic Association: empty";
//        } else {
//            //$smarty->assign('charID', $_POST["charID"]);
//        }
//        if ($_POST["newOptName"] == "") {
//            $errorFlag = true;
//            $msg .= "<br>New Characteristic Option: empty";
//        } else {
//            $smarty->assign('newOptName', $_POST["newOptName"]);
//        }
//
//        if ($errorFlag) {
//            $msg = $msg . "<br>";
//            $smarty->assign('msg', $msg);
//            $smarty->display('admin.tpl');
//            exit();
//        }
//
//        //------ Insert Query -----
//
//        $query = "INSERT INTO characteristic_option (Option_ID , Name, Characteristic_FK )
//              VALUES (DEFAULT, :newOptName, :charID)";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':newOptName', $_POST["newOptName"]);
//        $statement->bindValue(':charID', $_POST["charID"]);
//        $statement->execute();
//
//        $msg3 = "Add Successful!";
//
//    }

    //------ Build Associative Admin Array ------
    $query = "SELECT Admin_ID, Username FROM Administrator";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $adminResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $adminResults[$row['Admin_ID']] = $row['Username'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("adminArray", $adminResults);

    //------ Build Associative Shape Array ------
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

    //------ Build Associative Characteristic Array ------
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
    $smarty->display('addAdmin.tpl');
