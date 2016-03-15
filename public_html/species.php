<?php
//Fungi Team 2015
include "../private_html/setup.php";
$smarty->assign("speciesActive", "active");
$smarty->assign("title", "Species");

$tableIndex=0;

//get list of species
$query = "SELECT Scientific_Name, URL, Common_Name, Phylum, Sp_Order, Family FROM Species";
$statement = $pdo->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

//loop through list of species
for ($i = 0; $i < count($result); $i++) {
	//add scientific name
	$data[$tableIndex] = "<a href=\"".$result[$i][1]."\">"
						.$result[$i][0]."</a>";
	$tableIndex++;
	
	//common name
	$data[$tableIndex] = $result[$i][2];
	$tableIndex++;
	
	//phylum
	$data[$tableIndex] = $result[$i][3];
	$tableIndex++;
	
	//sp_order
	$data[$tableIndex] = $result[$i][4];
	$tableIndex++;
	
	//family
	$data[$tableIndex] = $result[$i][5];
	$tableIndex++;
}

$tableIndex = 0;

$urlToBePassed = "";

//loop through list of species
for ($k = 0; $k < count($result); $k++) {
	
	$urlToBePassed = urlencode($result[$k][0]);
	
	//add scientific name
	$newdata[$k][$tableIndex] = "<a href='result.php?name=".$urlToBePassed."'>"
						.$result[$k][0]."</a>";
	$tableIndex++;
	
	//common name
	$newdata[$k][$tableIndex] = $result[$k][2];
	$tableIndex++;
	
	//phylum
	$newdata[$k][$tableIndex] = $result[$k][3];
	$tableIndex++;
	
	//sp_order
	$newdata[$k][$tableIndex] = $result[$k][4];
	$tableIndex++;
	
	//family
	$newdata[$k][$tableIndex] = $result[$k][5];
	$tableIndex++;
}


$smarty->assign('data', $data);
$smarty->assign('newdata', $newdata);
$smarty->display('species.tpl');
?>