<?php
//Fungi Team 2015

include "../private_html/setup.php";

$smarty->assign("appActive", "active");
$smarty->assign("title", "Application");

$query = "SELECT * FROM Shape_Category";
$stmt = $pdo->prepare($query);
$stmt->execute();

$shapeData = array();

while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $shapeData[] = $rows;
}

$smarty->assign('shapeData', $shapeData);
$smarty->display('app.tpl');

?>