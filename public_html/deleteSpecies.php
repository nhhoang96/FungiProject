<?php

include "../private_html/setup.php";

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

    $query2 = "DELETE FROM photo WHERE

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('addSpecies.tpl');
        exit();
    }

    //---- Delete Query -----
    $query = "DELETE FROM species WHERE Species_ID = :removedSpecies";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':removedSpecies', $_POST["removedSpecies"]);
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
if ($statement -> rowCount() > 0){
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
$shapeResults[$row['Shape_Category_ID']] = $row['Name'];
}
}else{
$smarty->assign("error1", 'Database Error');
}
$smarty->assign("shapeArray", $shapeResults);

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
if(isset($msg3)){
    $smarty->assign('success', $msg3);
}
$smarty->display('deleteSpecies.tpl');