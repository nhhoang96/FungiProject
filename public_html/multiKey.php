<?php
include "../private_html/setup.php";

//Get passed ID from Server

$id = $_GET["id"];
$smarty->assign("serverID", $_SERVER['PHP_SELF']);
$smarty->assign("id", $id);


//------- Queries for characteristics names and characteristics options------
$query = "SELECT Characteristic_ID, c.Name as Char_Name, Option_ID, o.Name as Opt_Name
	FROM characteristic c JOIN characteristic_option o ON o.Characteristic_FK = Characteristic_ID
	WHERE c.Category_FK = :parameter";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':parameter', $id, PDO::PARAM_STR);
$stmt->execute();

//---- Generate the Multi-Access Key with drop-down options ------

$charID = array();
$varCount = 0;
$cc = -1;
$charList = array();

while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	if($cc != $row['Characteristic_ID']) {
		$varCount = $varCount + 1;
		if($cc != - 1) {
			$char['options'] = $opt;
			$charList[$cc] = $char;
		}
		$char = array(
			"ID" => $row['Characteristic_ID'],
			"Name" => $row['Char_Name']
		);
		$opt = array();
		$cc = $row['Characteristic_ID'];
		$charID[$varCount] = $row['Characteristic_ID'];
	}
	$opt[] = array(
		"Opt_ID" => $row['Option_ID'],
		"Opt_Name" => $row['Opt_Name']
	);
}

if (isset($opt)){
$char['options'] = $opt;
}
if (isset($char)){
$charList[$cc] = $char;
}

$smarty ->assign("charID", $charID);
$smarty ->assign("charList", $charList);


//<!--Process form-->
$urlToBePassed = array();
$count = 1;

// ----- Check if Submit button is clicked ----
if (isset($_POST["selectSpecies"])) {

	$c = count($_POST) - 1;
	$firstTime = 1;
	$build = "";
	foreach ($_POST as $key => $val) {

		if(strcmp("$val", "Select") == 0){}
		else{
		if ($firstTime == 1) {

			$build = $build . "Option_FK = " . $val;
		} else {
			$build = $build . " OR Option_FK = " . $val;
		}
		$firstTime = $firstTime + 1;
	}

}

	//------ Queries for shortened list of species based on chosen options-------
	$query = "SELECT DISTINCT Species_ID, k.Scientific_Name
			FROM species_option LEFT JOIN species k ON Species_ID = Species_FK
			WHERE $build
			GROUP BY Species_ID";

	$stmt = $pdo->prepare($query);
	$stmt->execute();

	//----- Populate the rows with url of Scientific Names of chosen species----

	$scientificName = array();

	if ($stmt->rowCount() > 0) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			//if ($row2['Scientific_Name'] == )
			$urlToBePassed[$count] = urlencode($row['Scientific_Name']);
			$scientificName[$count] = $row['Scientific_Name'];
			$count = $count + 1;
		}
	}else{

		$smarty->assign("error1", 'Database Error');
	}

	$smarty->assign("urlToBePassed",$urlToBePassed);
	$smarty->assign("scientificName", $scientificName);
} else {

	//------ Queries for full list of species -------
	$query4 = "SELECT * FROM species WHERE Shape_FK = :parameter2";

	$stmt4 = $pdo->prepare($query4);
	$stmt4->bindParam(':parameter2', $id, PDO::PARAM_STR);
	$stmt4->execute();

	$sciName = array();
	$url = array();
	$count1 = 1;

	//---- Populate rows with url of full list of species ----
	while($row2=$stmt4->fetch(PDO::FETCH_ASSOC)){
		$url[$count1] = urlencode($row2['Scientific_Name']);
		$sciName[$count1] = $row2['Scientific_Name'];
		$count1= $count1 + 1;
	}

	$smarty->assign("sciName", $sciName);
	$smarty->assign("url", $url);
}

$smarty->display('multiKey.tpl');
?>