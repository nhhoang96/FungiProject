<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/27/2016
 * Time: 11:27 PM
 */
include "../private_html/setup.php";

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
$smarty->display('addTemplate.tpl');