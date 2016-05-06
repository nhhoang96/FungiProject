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
    } elseif (isset($_POST["addAdmin"])) {
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
            $smarty->display('addShape.tpl');
            exit();
        }

        $testImage = "testImage.jpg";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':shapeName', $_POST["shapeName"]);
        $statement->bindValue(':description', $_POST["description"]);
        $statement->bindValue(':image', $testImage);
        $statement->execute();

        $msg3 = "Add Successful!";
    }
//} elseif (isset($_POST["updateShape"])){
//
//        $errorFlag = false;
//        $smarty->assign('errorFlag', $errorFlag);
//
//        $msg = "<strong>Missing Information!</strong>";
//
//        // ------ Input Error Checking ------
//        if ($_POST["updateShapeName"] == "") {
//            $errorFlag = true;
//            $msg .= "<br> Shape Name: empty.";
//        } else {
//            $smarty->assign('updateShapeName', $_POST["updateShapeName"]);
//        }
//
//        if ($_POST["updateShapeDescription"] == "") {
//            $errorFlag = true;
//            $msg .= "<br> Shape Name: empty.";
//        } else {
//            $smarty->assign('updateShapeDescription', $_POST["updateShapeDescription"]);
//        }
//
//        if ($errorFlag) {
//            $msg = $msg . "<br>";
//            $smarty->assign('msg', $msg);
//            $smarty->display('addShape.tpl');
//            exit();
//        }
//
//        $query = "UPDATE shape
//              SET Name = :updateShapeName, Description = :updateShapeDescription
//              WHERE Shape_Category_ID = :shapeID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':updateShapeName', $_POST["updateShapeName"]);
//        $statement->bindValue(':updateShapeDescription', $_POST["updateShapeDescription"]);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
////        $statement->bindValue(':image', $testImage);
//        $statement->execute();
//
////} elseif (isset($_POST["deleteShape"])) {
//
//        $errorFlag = false;
//        $smarty->assign('errorFlag', $errorFlag);
//
//        $msg = "<strong>Missing Information!</strong>";
//        $msg2 = "<strong>Add failed!</strong><br>";
//
//        // ------ Input Error Checking ------
//        if ($_POST["shapeID"] == "") {
//            $errorFlag = true;
//            $msg .= "<br>Shape name: empty";
//        } else {
//            $smarty->assign('shapeID', $_POST["shapeID"]);
//        }
//
//        if ($errorFlag) {
//            $msg = $msg . "<br>";
//            $smarty->assign('msg', $msg);
//            $smarty->display('addShape.tpl');
//            exit();
//        }
//
//        // ------ Queries ------
//        $query = "DELETE FROM shape WHERE Shape_Category_ID = :shapeID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->execute();
//
//        $msg3 = "Delete Successful!";}

//    } elseif (isset($_POST["selectShape"])) {
//
//        $query = "SELECT Shape_Category_ID, Name, Description, Image FROM shape WHERE Shape_Category_ID = :shapeID";
//
//        $statement = $pdo->prepare($query);
//        $statement->bindValue(':shapeID', $_POST["shapeID"]);
//        $statement->execute();
//        $shapeResults = array();
//        if ($statement->rowCount() > 0) {
//            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//                $editShapeID = $row['Shape_Category_ID'];
//                $editShapeName = $row['Name'];
//                $editShapeDescription = $row['Description'];
//                $editShapeImage = $row['Image'];
//
//            }
//        } else {
//            $smarty->assign("error1", 'Database Error');
//        }
//
//
//        $smarty->assign("editShapeID", $editShapeID);
//        $smarty->assign("editShapeName", $editShapeName);
//        //remove extra white spaces from description string to improve readability
//        $editShapeDescription = preg_replace('/\s\s+/', ' ', $editShapeDescription);
//        $smarty->assign("editShapeDescription", $editShapeDescription);
//        $smarty->assign("editShapeImage", $editShapeImage);
//
//}

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

