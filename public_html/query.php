<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fungi Query</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	
	<link href="css/cards.css" type=text/css rel="stylesheet" />
	
	<link href="css/navigation.css" type=text/css rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/cards.js"></script>
	<script src="js/collapse.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/locale/bootstrap-table-zh-CN.min.js"></script>
</head>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="app.php" class="navbar-brand">Fungi Growing on Wood</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				<li class="active"><a href="app.php">Application</a></li>
               	<li><a href="species.php">Species</a></li>
               	<li><a href="about.php">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.html">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php 
//Get passed ID
$id = $_GET["birdsnest"];
?>

<form action = "<?php echo $_SERVER['PHP_SELF']."?id=".$id?>" method="post">
<?php
	include "setup.php";
	
	$query = "SELECT * FROM Characteristic 
			WHERE Char_Shape_Category_ID = :parameter";
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':parameter', $id, PDO::PARAM_STR);
	$stmt->execute();
	$var = 0;
	$opt_name = 0;
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$var = $var+1;
		?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#collapse".$var ?>"><span class="glyphicon glyphicon-th-list">
					</span> <?php echo $row['Name']?></a>
				</h4>
			</div>
			
			<?php
	
			$query2 = "SELECT * 
					FROM C_Option 
					WHERE Opt_Characteristic_ID IN 
						(SELECT Characteristic_ID AS T2
						FROM Characteristic         
						WHERE Name = '" . $row['Name'] ."' AND Char_Shape_Category_ID = :parameter2)";
				$stmt2 = $pdo->prepare($query2);
				$stmt2->bindParam(':parameter2', $id, PDO::PARAM_STR);
				$stmt2->execute();
			?>
			
			<div id= "<?php echo "collapse".$var ?>" class="panel-collapse collapse">
				<div class="list-group">
					
					<?php
					while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
						?>
						<?php echo $row2['Opt_Characteristic_ID']?>
						<?php echo "".$opt_name?>
						<input type="checkbox" name="<?php echo "".$opt_name?>" value="<?php echo $row2['Option_ID']?>" onchange= "summary()"> <?php echo $row2['Name'] ?><br>
						<?php $opt_name = $opt_name + 1; ?>
					<?php
					}
					?>
				</div>
			</div>
		</div>  <?php
		}
		?>
		<input  type = "submit" name = "submit" value = "Submit">
	</div>
</form>


<!--Process form-->
<?php
if(isset($_POST['submit'])) {
	?><h3>Species:</h3><?php
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
	?><ul> <?php
		$urlToBePassed = "";
		while($row2=$stmt3->fetch(PDO::FETCH_ASSOC)){
			$urlToBePassed = urlencode($row2['Scientific_Name']);
	?>
		<li><?php echo "<a href='result.php?name=".$urlToBePassed."'>".$row2['Common_Name']."</a>" ?></li>
	<?php
	}
	?>
	</ul>
	<?php
} else {
	?><br> All species will display until selections are made.<br><h3>Species:</h3><?php
    $query4 = "SELECT * FROM Species WHERE Spec_Shape_Category_ID= :parameter2";
	$stmt4 = $pdo->prepare($query4);
	$stmt4->bindParam(':parameter2', $id, PDO::PARAM_STR);
	$stmt4->execute();
	?><ul> <?php
		$urlToBePassed = "";
		while($row2=$stmt4->fetch(PDO::FETCH_ASSOC)){
			$urlToBePassed = urlencode($row2['Scientific_Name']);
	?>
		<li><?php echo "<a href='result.php?name=".$urlToBePassed."'>".$row2['Common_Name']."</a>" ?></li>
	<?php
	}
	?>
	</ul>
	<?php
}