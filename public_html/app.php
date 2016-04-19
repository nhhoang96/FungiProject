<?php
//Fungi Team 2015

include "../private_html/setup.php";

$smarty ->assign("pageName", "app");

$query = "SELECT * FROM shape";
$stmt = $pdo->prepare($query);
$stmt->execute();

$shapeData = array();

while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $shapeData[] = $rows;
}

$smarty->assign('shapeData', $shapeData);
$smarty->display('app.tpl');

?>