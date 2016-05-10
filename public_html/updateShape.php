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

//----- Check if the update shape submit button was hit ----
if (isset($_POST["updateShape"])) {

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

    if(!empty($_FILES["myimage"]["tmp_name"])){
        if(is_uploaded_file($_FILES["myimage"]["tmp_name"])) {
            move_uploaded_file($_FILES["myimage"]["tmp_name"], "img/" . $_FILES["myimage"]["name"]);

            $query = "UPDATE shape
              SET Name = :updateShapeName, Description = :updateShapeDescription, Image = :image
              WHERE Shape_Category_ID = :shapeID";

            $statement = $pdo->prepare($query);
            $statement->bindValue(':updateShapeName', $_POST["updateShapeName"]);
            $statement->bindValue(':updateShapeDescription', $_POST["updateShapeDescription"]);
            $statement->bindValue(':shapeID', $_POST["shapeID"]);
            $statement->bindValue(':image', $_FILES["myimage"]["name"]);
            $statement->execute();
        }
    }
    else {
        $query = "UPDATE shape
              SET Name = :updateShapeName, Description = :updateShapeDescription
              WHERE Shape_Category_ID = :shapeID";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':updateShapeName', $_POST["updateShapeName"]);
        $statement->bindValue(':updateShapeDescription', $_POST["updateShapeDescription"]);
        $statement->bindValue(':shapeID', $_POST["shapeID"]);
        $statement->execute();
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('updateShape.tpl');
        exit();
    }

    $msg3 = "Update Successful!";
//        $statement->bindValue(':image', $testImage);

} elseif (isset($_POST["selectShape"])) {


    $query = "SELECT Shape_Category_ID, Name, Description, Image FROM shape WHERE Shape_Category_ID = :shapeID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeID', $_POST["shapeID"]);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            if(!empty($row['Image'])){
            $editShapeID = $row['Shape_Category_ID'];
            $editShapeName = $row['Name'];
            $editShapeDescription = $row['Description'];
            $editShapeImage = $row['Image'];

                $smarty->assign("editShapeID", $editShapeID);
                $smarty->assign("editShapeName", $editShapeName);
                //remove extra white spaces from description string to improve readability
                //$editShapeDescription = trim($editShapeDescription);
                $editShapeDescription = preg_replace('/\s\s+/', ' ', $editShapeDescription);
                $smarty->assign("editShapeDescription", $editShapeDescription);
                $smarty->assign("editShapeImage", $editShapeImage);
            }
            else {

                $editShapeID = $row['Shape_Category_ID'];
                $editShapeName = $row['Name'];
                $editShapeDescription = $row['Description'];

                $smarty->assign("editShapeID", $editShapeID);
                $smarty->assign("editShapeName", $editShapeName);
                //remove extra white spaces from description string to improve readability
                //$editShapeDescription = trim($editShapeDescription);
                $editShapeDescription = preg_replace('/\s\s+/', ' ', $editShapeDescription);
                $smarty->assign("editShapeDescription", $editShapeDescription);
            }

        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }




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
$smarty->display('updateShape.tpl');