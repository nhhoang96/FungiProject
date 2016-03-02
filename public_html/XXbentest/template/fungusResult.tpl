<!DOCTYPE html>
<html lang="en">
<head>
    <title>{$fungName}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/reset.css" type=text/css rel="stylesheet" />
    <link href="../css/fungusResult.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="jquery-2.1.3.min.js"></script>
</head>

<body>

<div class="container-fluid">
<div id="content">

<div id="title"><h1>{$fungName} <small>{$sciName}</small></h1></div>

<div id="info">
    <ul>
        <li>Name: {$fungName}</li>
        <li>Scientific Name: {$sciName}</li>
        <li>Phylum: {$phylum}</li>
        <li>Order: {$order}</li>
        <li>Family: {$family}</li>
        <li>Occurrence on wood substrate: {$occurrence}</li>
        <li>Dimensions: {$dimension}</li>
        <li>Cap: {$cap}</li>
        <li>Gills: {$gills}</li>
        <li>Spore print: {$sporePrint}</li>
        <li>Veil: {$veil}</li>
        <li>Edibility: {$edibility}</li>
        <li>Comment: {$comment}</li>
    </ul>
</div> <!-- end info -->

<div id="images">image carousel goes here</div>

</div> <!-- end content -->
</div>

</body>
</html>