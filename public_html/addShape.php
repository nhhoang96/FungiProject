<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/24/2016
 * Time: 9:52 PM
 */

// ------ Input Error Checking ------
include "../private_html/setup.php";

$errorFlag = false;
$smarty->assign('errorFlag', $errorFlag);

$msg = "<strong>Missing Information!</strong>";
$msg2 = "<strong>Add failed!</strong><br>";

if ($_POST["shapeName"] == "") {
    $errorFlag = true;
    $msg .= "<br>Shape Name: empty";
} else {
    $smarty->assign('shapeName', $_POST["shapeName"]);
}
if ($_POST["description"] == "") {
    $errorFlag = true;
    $msg .= "<br>Shape Text: empty";
} else {
    $smarty->assign('description', $_POST["description"]);
}


if ($errorFlag){
    $msg = $msg . "<br>";
    $smarty->assign('msg', $msg);
    $smarty->display('addTemplate.tpl');
    exit();
}


// ------ Queries ------
$query = "INSERT INTO shape (Shape_Category_ID, Name, Description, Image)
              VALUES (DEFAULT, :shapeName, :description, :image)";

$testImage = "testImage.jpg";
$statement = $pdo->prepare($query);
$statement->bindValue(':shapeName', $_POST["shapeName"]);
$statement->bindValue(':description', $_POST["description"]);
$statement->bindValue(':image', $testImage);
$statement->execute();

$msg3 = "Add Successful!";

$smarty->display('addTemplate.tpl');