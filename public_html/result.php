<?php
//Fungi Team 2015
include "setup.php";

$name = $_GET["name"];

// Retrieve fungi info

$query = "SELECT Scientific_Name, Common_Name, Name_Derivation, Phylum, Sp_Order, Family, Comments, Wood_Substrate, Dimensions, Species_ID
	FROM Species WHERE Scientific_Name = :parameter";
$statement = $pdo->prepare($query);
$statement->bindParam(':parameter', $name, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();

$sciName = $result[0][0];
$commonName = $result[0][1];
$nameDerivation = $result[0][2];
$phylum = $result[0][3];
$spOrder = $result[0][4];
$family = $result[0][5];
$comment = $result[0][6];
$woodSubstrate = $result[0][7];
$dimensions = $result[0][8];

// Retrieve images

$speciesID = $result[0][9];

$query = "SELECT Photo_ID, Photo_Name, Caption FROM Photo WHERE Photo_Species_ID = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(':id', $speciesID, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();

$photoID = $result[0][0];
$photoName = $result[0][1];
$photoName = "img/".$photoName;
$caption = $result[0][2];


$smarty->assign('sciName', $sciName);
$smarty->assign('commonName', $commonName);
$smarty->assign('nameDerivation', $nameDerivation);
$smarty->assign('phylum', $phylum);
$smarty->assign('spOrder', $spOrder);
$smarty->assign('family', $family);
$smarty->assign('comment', $comment);
$smarty->assign('woodSubstrate', $woodSubstrate);
$smarty->assign('dimensions', $dimensions);
$smarty->assign('photoID', $photoID);
$smarty->assign('photoName', $photoName);
$smarty->assign('caption', $caption);
$smarty->display('result.tpl');
?>