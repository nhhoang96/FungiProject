<!DOCTYPE html>
<html lang="en">
<head>
    <title>{$title}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <link href="css/index.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
    <!--Change stylesheet based on page-->
    <link href="css/application.css" type="text/css" rel="stylesheet" />
    <link href="css/about.css" type=text/css rel="stylesheet" />
    <link href="css/result.css" type=text/css rel="stylesheet" />
    {*<link href="css/lightbox.css" type=text/css rel="stylesheet" />*}
    {*<link href="css/cards.css" type=text/css rel="stylesheet" />*}
    <link href="css/head.css" type=text/css rel="stylesheet" />
    <link href="css/glossary.css" type=text/css rel="stylesheet" />
    <link href="css/admin.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

</head>

<body id="{$pageName}">
<!--navigation-->
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php" class="navbar-brand">Fungi Growing on Wood</a>
        </div>

        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="appnav"><a href="app.php">Application</a></li>
                <li class="speciesnav"><a href="species.php">Species</a></li>
                <li class="glossary"><a href="glossary.php">Glossary</a></li>
                <li class="about"><a href="about.php">About</a>
            </ul>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="admin"><a href="addAdmin.php">Admin</a></li>
                    {if isset($isAdmin)}
                    <li><button id="helpBtn" class="btn btn-default">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    </button>
                    </li>
                    {/if}
                </ul>
                <div>
                    {if isset($isAdmin)}

                        <div id="help">{include "userGuide.tpl"}</div>

                    {/if}
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.js"></script> <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#helpBtn").click(function(){
            $("#help").toggle();
        });
    </script>
    <script>

    </script>

</nav>
