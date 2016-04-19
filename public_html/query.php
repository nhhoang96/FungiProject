<?php
include "../private_html/setup.php";

//Get passed ID
$id = $_GET["id"];
$smarty->assign("serverID", $_SERVER['PHP_SELF']);

$query = "SELECT Characteristic_ID, c.Name as Char_Name, Option_ID, o.Name as Opt_Name
	FROM characteristic c JOIN characteristic_option o ON o.Characteristic_FK = Characteristic_ID
	WHERE c.Category_FK = :parameter";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':parameter', $id, PDO::PARAM_STR);
$stmt->execute();

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
$char['Options'] = $opt;
$charList[$cc] = $char;

$smarty ->assign("charID", $charID);
$smarty ->assign("charList", $charList);
$var = 0;

//<!--Process form-->
$urlToBePassed = array();
$count = 0;
if(isset($_POST['submit'])) {
	$c = count($_POST) - 1;
	$firstTime = 1;
	$build = "";
	foreach($_POST as $key=>$val){
		if(strcmp("$val", "Submit") == 0){}
		else{
			if($firstTime == 1){
				$build = $build."SO_Option_ID = ".$val;
			} else {
				$build = $build." OR SO_Option_ID = ".$val;
			}
			$firstTime = $firstTime + 1;
		}

	}

	$query3 = "SELECT * FROM species
		WHERE Species_ID IN
			(SELECT Species_ID FROM
		(SELECT Species_ID, count(*) AS num
			FROM Species_Opt LEFT JOIN species ON Species_ID = SO_Species_ID
			WHERE ".$build."
			GROUP BY Species_ID
			HAVING num =".$c.") AS s
		)";
	$stmt3 = $pdo->prepare($query3);
	$stmt3->execute();

	while($row2=$stmt3->fetch(PDO::FETCH_ASSOC)){
		$count=$count + 1;
		$urlToBePassed[$count] = urlencode($row2['Scientific_Name']);
	}
	$smarty->assign("urlToBePassed",$urlToBePassed);
} else {
	$query4 = "SELECT * FROM species WHERE Shape_FK = :parameter2";
	$stmt4 = $pdo->prepare($query4);
	$stmt4->bindParam(':parameter2', $id);
	$stmt4->execute();
	$commonName = array();

	while($row2=$stmt4->fetch(PDO::FETCH_ASSOC)){
		$count=$count + 1;
		$urlToBePassed[$count] = urlencode($row2['Scientific_Name']);
		$commonName[$count] = $row2['Common_Name'];
	}
	$smarty->assign("commonName", $commonName);
	$smarty->assign("urlToBePassed", $urlToBePassed);
}
$smarty->display('query.tpl');
?>