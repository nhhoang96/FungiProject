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

//----- Check if the add shape submit button was hit ----
if (isset($_POST["addShape"])) {

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";
    $msg2 = "<strong>Add failed!</strong><br>";

    // ------ Input Error Checking ------
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

    move_uploaded_file($_FILES["myimage"]["tmp_name"], "img/" . $_FILES["myimage"]["name"]);


    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('addShape.tpl');
        exit();
    }


    // ------ Queries ------
    $query = "INSERT INTO shape (Shape_Category_ID, Name, Description, Image)
              VALUES (DEFAULT, :shapeName, :description, :image)";


//            $testImage = "testImage.jpg";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeName', $_POST["shapeName"]);
    $statement->bindValue(':description', $_POST["description"]);
    $statement->bindValue(':image', $_FILES["myimage"]["name"]);
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
if (isset($msg3)) {
    $smarty->assign('success', $msg3);
}
$smarty->display('addShape.tpl');

