<?php
//Fungi Team 2015
include "../private_html/setup.php";

$name = $_GET["name"];

// Retrieve fungi info

$query = "SELECT Scientific_Name, Common_Name, Name_Derivation, Phylum, Sp_Order, Family, Comments, Wood_Substrate, Dimensions, Species_ID
	FROM Species WHERE Scientific_Name = :parameter";
$statement = $pdo->prepare($query);
$statement->bindParam(':parameter', $name, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

$sciName = $result['Scientific_Name'];
$commonName = $result['Common_Name'];
$nameDerivation = $result['Name_Derivation'];
$phylum = $result['Phylum'];
$spOrder = $result['Sp_Order'];
$family = $result['Family'];
$comment = $result['Comments'];
$woodSubstrate = $result['Wood_Substrate'];
$dimensions = $result['Dimensions'];

// Retrieve images

$speciesID = $result['Species_ID'];

$query = "SELECT Photo_ID, Photo_Name, Caption FROM Photo WHERE Species_FK = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(':id', $speciesID, PDO::PARAM_STR);
$statement->execute();
$photos = array();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){

    $photos[] = array (
        "Photo_Name" => $row['Photo_Name'],
        "Caption" => $row['Caption']

    );
}

$smarty->assign('photos', $photos);
$smarty->assign('sciName', $sciName);
$smarty->assign('commonName', $commonName);
$smarty->assign('nameDerivation', $nameDerivation);
$smarty->assign('phylum', $phylum);
$smarty->assign('spOrder', $spOrder);
$smarty->assign('family', $family);
$smarty->assign('comment', $comment);
$smarty->assign('woodSubstrate', $woodSubstrate);
$smarty->assign('dimensions', $dimensions);;
$smarty->display('result.tpl');
?>