<?php
session_start();
include "../private_html/setup.php";

if(!isset($_SESSION['admin'])){
    $smarty->display('index.tpl');
    exit();
}

$smarty->assign("isAdmin", true);
$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");
//----- Check if the delete shape submit button was hit ----
if (isset($_POST["deleteCharacteristic"])) {

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["removedCharacteristic"] == "") {
        $errorFlag = true;
        $msg .= "<br>Please select a Characteristic";
    } else {
        $smarty->assign('removedCharacteristic', $_POST["removedCharacteristic"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('addCharacteristic.tpl');
        exit();
    }

    $query2 = "DELETE FROM characteristic_option WHERE Characteristic_FK = :removedCharacteristic";
    $statement2 = $pdo->prepare($query2);
    $statement2->bindValue(':removedCharacteristic', $_POST["removedCharacteristic"]);
    $statement2->execute();

    //-----Delete Query ---------
    $query = "DELETE FROM characteristic WHERE Characteristic_ID = :removedCharacteristic";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':removedCharacteristic', $_POST["removedCharacteristic"]);
    $statement->execute();

    $msg3 = "Removal Successful!";
}
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
$smarty->display('deleteCharacteristic.tpl');
