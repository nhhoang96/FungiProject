<?php

include "../private_html/setup.php";

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

if (isset($_POST["deleteShape"])) {

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";
    $msg2 = "<strong>Add failed!</strong><br>";

    // ------ Input Error Checking ------
    if ($_POST["shapeID"] == "") {
    $errorFlag = true;
    $msg .= "<br>Shape name: empty";
    } else {
    $smarty->assign('shapeID', $_POST["shapeID"]);
    }

    if ($errorFlag) {
    $msg = $msg . "<br>";
    $smarty->assign('msg', $msg);
    $smarty->display('deleteShape.tpl');
    exit();
    }

    // ------ Queries ------
    $query = "DELETE FROM shape WHERE Shape_Category_ID = :shapeID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();

    $msg3 = "Delete Successful!";
}
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

$smarty->display('deleteShape.tpl');

