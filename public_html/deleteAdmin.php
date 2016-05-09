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


//----- Check if the delete admin submit button was hit ----
if (isset($_POST["deleteAdmin"])) {
    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["removeAdmin"] == "") {
        $errorFlag = true;
        $msg .= "<br>Error, No Admin Username Was Passed.";
    } else {
        $smarty->assign('removeAdmin', $_POST["removeAdmin"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('XXXXadmin.tpl');
        exit();
    }

    //------ Delete Query -----

    $query = "DELETE FROM Administrator WHERE Admin_ID = :removeAdmin";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':removeAdmin', $_POST["removeAdmin"]);
    $statement->execute();

    $msg3 = "Delete Successful!";
}

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
$smarty->display('deleteAdmin.tpl');