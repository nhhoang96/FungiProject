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

If($stmt->rowCount() == 0){
    //Jump back to whatever page you’re on

   Exit();
}
Else {
    //Display to Admin Dashboard tpl
    echo "You are on the admin Dashboard";
}
