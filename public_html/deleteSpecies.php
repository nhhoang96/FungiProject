<?php
<<<<<<< HEAD

=======
>>>>>>> 717b552a2aab9bc7469d9738f94f43297d7f2fd4
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
    $smarty->assign("adminActive", "active");
    $smarty->assign("title", "Admin");


//----- Check if the delete species submit button was hit ----
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

        //---Query to remove image from img file---
        $query2 = "SELECT Photo_Name FROM photo WHERE Species_FK = :removedSpecies";
        $statement2 = $pdo->prepare($query2);
        $statement2->bindValue(':removedSpecies', $_POST["removedSpecies"]);
        $statement2->execute();


        if ($statement2->rowCount() > 0) {
            while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
                unlink('img/' . $row['Photo_Name']);
            }
        }

        //---- Delete Query -----
        $query = "DELETE FROM species WHERE Species_ID = :removedSpecies";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':removedSpecies', $_POST["removedSpecies"]);
        //echo $query . "<br>" . $_POST["removedSpecies"]; exit();
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
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);

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
    $smarty->display('deleteSpecies.tpl');