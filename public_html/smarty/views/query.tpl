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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/cards.js"></script>
	<script src="js/collapse.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/locale/bootstrap-table-zh-CN.min.js"></script>
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

<form action ="{$serverID}" method="post">
	{foreach $charList as $char}
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					{foreach $charID as $id}
						{if $char.ID == $id}
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse{$id}"	><span class="glyphicon glyphicon-th-list">
							</span> {$char.Name} </a>
						{/if}
					{/foreach}

				</h4>
			</div>
			{foreach $charID as $id}
			{if $char.ID == $id}
			<div id="collapse{$id}"  class="panel-collapse collapse">
				{/if}
				{/foreach}
				<div class="list-group">
					{foreach $char.options as $opt}
						<input type="checkbox" name={$char.Name} value={$opt.Opt_ID} onchange= "summary()"> {$opt.Opt_Name}<br>

					{/foreach}
				</div>

			</div>

		</div>
	{/foreach}
	<input  type = "submit" name = "submit" value = "Submit">

</form>
<h3>Species:</h3> <ul>
	{foreach $urlToBePassed as $url}
	{foreach $commonName as $common}
	<li><a href='result.php?name={$url}'>{$common}</a>
		{/foreach}
		{/foreach}
	</li>
</ul>
<br> All species will display until selections are made.<br><h3>Species:</h3> <ul>
	{foreach $urlToBePassed as $url}
	<li>{$url}
		{/foreach}
	</li>

</ul>

</html>