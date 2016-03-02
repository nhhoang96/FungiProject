<?php
//Fungi Team 2015

include "../private_html/setup.php";
$smarty->display('head.tpl');

$query = "SELECT * FROM Shape_Category";
$stmt = $pdo->prepare($query);
$stmt->execute();

$shapeData = array();

while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($rows as $row) {
        $shapeData[] = array('name' => $row['Name'], 'description' => $row['Description'],
            'img' => $row['Image'], 'link' => "<a href='query.php?id=" . $row['Shape_Category_ID'] . "'>Click To Sort</a>");
    }
}
$smarty->assign('shapeData', $shapeData);
$smarty->display('app.tpl');

?>