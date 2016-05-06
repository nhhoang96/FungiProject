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

if(!isset($_SESSION['admin'])){
    $smarty->display('index.tpl');
    exit();
}
    $smarty->assign("isAdmin", true);
    $smarty->assign("adminActive", "active");
    $smarty->assign("title", "Admin");


//----- Check if the add character option submit button was hit ----
    if (isset($_POST["addCharOpt"])) {
        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";

        // ------ Input Error Checking ------
        if ($_POST["charID"] == "") {
            $errorFlag = true;
            $msg .= "<br>Characteristic Association: empty";
        } else {
            //$smarty->assign('charID', $_POST["charID"]);
        }
        if ($_POST["newOptName"] == "") {
            $errorFlag = true;
            $msg .= "<br>New Characteristic Option: empty";
        } else {
            $smarty->assign('newOptName', $_POST["newOptName"]);
        }

        if ($errorFlag) {
            $msg = $msg . "<br>";
            $smarty->assign('msg', $msg);
            $smarty->display('admin.tpl');
            exit();
        }

        //------ Insert Query -----
        $query = "INSERT INTO characteristic_option (Option_ID , Name, Characteristic_FK )
              VALUES (DEFAULT, :newOptName, :charID)";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':newOptName', $_POST["newOptName"]);
        $statement->bindValue(':charID', $_POST["charID"]);
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

    $smarty->display('addCharOption.tpl');