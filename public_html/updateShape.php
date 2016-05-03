<?php

include "../private_html/setup.php";

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

if (isset($_POST["updateShape"])){

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>Missing Information!</strong>";

    // ------ Input Error Checking ------
    if ($_POST["updateShapeName"] == "") {
        $errorFlag = true;
        $msg .= "<br> Shape Name: empty.";
    } else {
        $smarty->assign('updateShapeName', $_POST["updateShapeName"]);
    }

    if ($_POST["updateShapeDescription"] == "") {
        $errorFlag = true;
        $msg .= "<br> Shape Name: empty.";
    } else {
        $smarty->assign('updateShapeDescription', $_POST["updateShapeDescription"]);
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('updateShape.tpl');
        exit();
    }

    $query = "UPDATE shape
              SET Name = :updateShapeName, Description = :updateShapeDescription
              WHERE Shape_Category_ID = :shapeID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':updateShapeName', $_POST["updateShapeName"]);
    $statement->bindValue(':updateShapeDescription', $_POST["updateShapeDescription"]);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->bindValue(':image', $testImage);
    $statement->execute();

}elseif (isset($_POST["selectShape"])) {

    $query = "SELECT Shape_Category_ID, Name, Description, Image FROM shape WHERE Shape_Category_ID = :shapeID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $editShapeID = $row['Shape_Category_ID'];
            $editShapeName = $row['Name'];
            $editShapeDescription = $row['Description'];
            $editShapeImage = $row['Image'];

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }


    $smarty->assign("editShapeID", $editShapeID);
    $smarty->assign("editShapeName", $editShapeName);
    //remove extra white spaces from description string to improve readability
    $editShapeDescription = preg_replace('/\s\s+/', ' ', $editShapeDescription);
    $smarty->assign("editShapeDescription", $editShapeDescription);
    $smarty->assign("editShapeImage", $editShapeImage);

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

$smarty->display('updateShape.tpl');

