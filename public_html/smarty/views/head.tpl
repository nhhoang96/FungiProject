<!DOCTYPE html>
<html lang="en">
<head>
	<title>{$title}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<link href="css/navigation.css" type=text/css rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/cards.js"></script>
	<script src="js/collapse.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/locale/bootstrap-table-zh-CN.min.js"></script>
	<!--Change stylesheet based on page-->
	{if $active eq 'about'}
		<link href="css/about.css" type=text/css rel="stylesheet" />
	{elseif $active eq 'species'}
		<link href="css/species.css" type=text/css rel="stylesheet" />
	{elseif $active eq 'result'}
		<link href="css/result.css" type=text/css rel="stylesheet" />
		<script src="js/lightbox.min.js"></script>
		<link href="css/lightbox.css" rel="stylesheet" />
	{else}
		<link href="css/cards.css" type=text/css rel="stylesheet" />
	{/if}
</head>

<body>
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
            <a href="index.php" class="navbar-brand">Fungi Growing on Wood</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				{if $active eq 'app'}
					<li class="active"><a href="app.php">Application</a></li>
                	<li><a href="species.php">Species</a></li>
                	<li><a href="about.php">About</a></li>
				{elseif $active eq 'species'}
					<li><a href="app.php">Application</a></li>
                	<li class="active"><a href="species.php">Species</a></li>
                	<li><a href="about.php">About</a></li>
				{else}
					<li><a href="app.php">Application</a></li>
                	<li><a href="species.php">Species</a></li>
                	<li class="active"><a href="about.php">About</a></li>
				{/if}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.html">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav>