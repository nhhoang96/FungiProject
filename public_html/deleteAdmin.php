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

//echo strtolower(phpCAS::getUser());

//::getUser();
$sql = "SELECT * FROM Administrator WHERE Username = :e";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":e", strtolower(phpCAS::getUser()));
$stmt->execute();

if($stmt->rowCount() == 0){
    //Jump back to whatever page you’re on
    $smarty->display("index.tpl");
    Exit();
} else {
    //Display to Admin Dashboard tpl
    //echo "You are on the admin Dashboard";

    $smarty->assign("adminActive", "active");
    $smarty->assign("title", "Admin");

    if(isset($_POST["deleteAdmin"])) {
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
            $smarty->display('admin.tpl');
            exit();
        }

        //------ Insert Query -----

        $query = "DELETE FROM Administrator WHERE Admin_ID = :removeAdmin";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':removeAdmin', $_POST["removeAdmin"]);
        $statement->execute();

        $msg3 = "Removal Successful!";
    }
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
if ($statement -> rowCount() > 0){
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
    }
}else{
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
$smarty->display('deleteAdmin.tpl');
