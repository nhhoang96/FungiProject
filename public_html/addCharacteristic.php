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

if(!isset($_SESSION['admin'])){
    $smarty->display('index.tpl');
    exit();
}
$smarty->assign("isAdmin", true);
$smarty->assign("isAdmin", true);
$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");


//----- Check if the select characteristic shape submit button was hit ----
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

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("charShapeID", $editShapeID);
    $smarty->assign("charShapeName", $editShapeName);

    //----- Check if the add characteristic submit button was hit ----
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

    //------ Insert Query -----

    $query = "INSERT INTO characteristic (Characteristic_ID , Name, Category_FK )
              VALUES (DEFAULT, :newCharName, :shapeID)";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':newCharName', $_POST["newCharName"]);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();

    $msg3 = "Add Successful!";
}
//------ Build Associative Shape Array ------
$query = "SELECT Shape_Category_ID, Name FROM shape";

$statement = $pdo->prepare($query);
$statement->execute();
$shapeResults = array();
if ($statement->rowCount() > 0) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
    }
} else {
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
if (isset($msg3)) {
    $smarty->assign('success', $msg3);
}
$smarty->display('addCharacteristic.tpl');
