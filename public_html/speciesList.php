<?php
include "../private_html/setup.php";
	$c = count($_POST) - 1;
	$firstTime = 1;
	$build = "";
	foreach($_POST as $key=>$val){
		if(strcmp("$val", "Submit") == 0){}
		else{
			if($firstTime == 1){
				$build = $build."Option_FK = ".$val;
			} else {
				$build = $build." OR Option_FK = ".$val;
			}
			$firstTime = $firstTime + 1;
		}

	}

?>

<?php

	$query2 = "SELECT * FROM Species
		WHERE Species_ID IN
			(SELECT Species_ID FROM
		(SELECT Species_ID, count(*) AS num
			FROM Species_Option LEFT JOIN Species ON Species_ID = Species_FK
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