<?php
include "../private_html/setup.php";

//Get passed ID
$id = $_GET["id"];
$smarty->assign("serverID", $_SERVER['PHP_SELF']);
//$query = "SELECT * FROM Characteristic
//			WHERE Char_Shape_Category_ID = :parameter";
$query = "SELECT Characteristic_ID, c.Name as Char_Name, Option_ID, o.Name as Opt_Name
	FROM Characteristic c JOIN C_Option o ON Opt_Characteristic_ID = Characteristic_ID
	WHERE Char_Shape_Category_ID = :parameter";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':parameter', $id, PDO::PARAM_STR);
$stmt->execute();


//$smarty->assign("collapseVar", "collapse".$var);
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
//$row2Name = array();

//while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
//	$var = $var + 1;
// //SELECT * FROM Characteristic c JOIN
//	$query2 = "SELECT *
//					FROM C_Option
//					WHERE Opt_Characteristic_ID IN
//						(SELECT Characteristic_ID AS T2
//						FROM Characteristic
//						WHERE Name = '" . $row['Name'] ."' AND Char_Shape_Category_ID = :parameter2)";
//	$stmt2 = $pdo->prepare($query2);
//	$stmt2->bindParam(':parameter2', $id, PDO::PARAM_STR);
//	$stmt2->execute();
//

//
//	$rowName[$var] =$row['Name'];
//
//
//	while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
//
//		$row2Var = $row2Var + 1;
//		$rowFinal = array();
//		$rowFinal[0] = $row2['Opt_Characteristic_ID'];
//		$rowFinal[1] = "".$opt_name;
//		$rowFinal[2] = $row2['Option_ID'];
//		$rowFinal[3] = $row2['Name'];
//		$row2Name[$row2Var] = $rowFinal;
//		$opt_name = $opt_name + 1;
//	}
//	//$smarty->assign("optCharID", $row2ID);
//	$smarty->assign("row2Name", $row2Name);
//}
//$smarty->assign("rowName", $rowName);

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

	$query3 = "SELECT * FROM Species 
		WHERE Species_ID IN
			(SELECT Species_ID FROM 
		(SELECT Species_ID, count(*) AS num
			FROM Species_Opt LEFT JOIN Species ON Species_ID = SO_Species_ID
			WHERE ".$build."  
			GROUP BY Species_ID
			HAVING num =".$c.") AS s
		)";
	$stmt3 = $pdo->prepare($query3);
	$stmt3->execute();
	//$urlToBePassed = "";


	while($row2=$stmt3->fetch(PDO::FETCH_ASSOC)){
		$count=$count + 1;
		$urlToBePassed[$count] = urlencode($row2['Scientific_Name']);
		//<li><?php echo "<a href='result.php?name=".$urlToBePassed."'>".$row2['Common_Name']."</a>" </li>

		//$smarty->assign("commonName",$row2['Common_Name']);
	}
	$smarty->assign("urlToBePassed",$urlToBePassed);
} else {
	$query4 = "SELECT * FROM Species WHERE Spec_Shape_Category_ID= :parameter2";
	$stmt4 = $pdo->prepare($query4);
	$stmt4->bindParam(':parameter2', $id);
//	, PDO::PARAM_STR
	$stmt4->execute();
	$commonName = array();
	//$urlToBePassed = "";
	while($row2=$stmt4->fetch(PDO::FETCH_ASSOC)){
		$count=$count + 1;
		$urlToBePassed[$count] = urlencode($row2['Scientific_Name']);
		$commonName[$count] = $row2['Common_Name'];
		//$smarty->assign("urlRow2","<a href='result.php?name=".$urlToBePassed."'>".$row2['Common_Name']."</a>");
		//<li><?php echo "<a href='result.php?name=".$urlToBePassed."'>".$row2['Common_Name']."</a>"</li>
	}
	$smarty->assign("commonName", $commonName);
	$smarty->assign("urlToBePassed", $urlToBePassed);
}
$smarty->display('query.tpl');
?>