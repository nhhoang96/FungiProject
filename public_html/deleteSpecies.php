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

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

if (isset($_POST["deleteSpecies"])) {
    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["removedSpecies"] == "") {
        $errorFlag = true;
        $msg .= "<br>Error, No Admin Username Was Passed.";
    } else {
        $smarty->assign('removedSpecies', $_POST["removedSpecies"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('addSpecies.tpl');
        exit();
    }

    //---- Delete Query -----

    $query = "DELETE FROM species WHERE Species_ID = :removedSpecies";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':removedSpecies', $_POST["removedSpecies"]);
    $statement->execute();

    $msg3 = "Removal Successful!";
}


//------ Build Associative Species Array ------
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

$smarty->display('deleteSpecies.tpl');