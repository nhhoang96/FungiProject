<?php
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

?>

<?php
	include "setup.php";	

	$query2 = "SELECT * FROM Species 
		WHERE Species_ID IN
			(SELECT Species_ID FROM 
		(SELECT Species_ID, count(*) AS num
			FROM Species_Opt LEFT JOIN Species ON Species_ID = SO_Species_ID
			WHERE ".$build."  
			GROUP BY Species_ID
			HAVING num =".$c.") AS s
		)";
	$stmt2 = $pdo->prepare($query2);
	$stmt2->execute();
?><ul> <?php
	while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
?>
	<li><?php echo $row2['Common_Name'] ?></li>
<?php
}
?>
</ul>