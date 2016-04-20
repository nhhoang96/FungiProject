{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

<h2>Admin Dashboard</h2>

<ul class="nav nav-pills admin-nav adminNavBar">
<li><a class="tab" href="admin.php">Edit Admin</a></li>
<li><a class="tab" href="addShape.php">Edit Shape</a></li>
<li><a class="tab" href="addSpecies.php">Edit Species</a></li>
<li><a class="tab" href="logout.php">Logout</a></li>

</ul>


<div class="col-lg-12 dashboard" id="editSpecies">
<form action="addSpecies.php" method="post" id="newSpecies" enctype="multipart/form-data">
<h3>New Species:</h3>
<div class="updates">
Scientific Name:
<input type="text" name="commonName" class="form-control"><br>
Common Name:
<input type="text" class="form-control" name="nameDerivation"><br>
Name Derivation:
<input type="text" class="form-control" name="scientificName"><br>
Phylum:
<input type="text" class="form-control" name="phylum"><br>
Order:
<input type="text" class="form-control" name="order"><br>
Family:
<input type="text" class="form-control" name="family"><br>
Comment:
<input type="text" class="form-control" name="comments"><br>
Wood Substrate:
<input type="text" class="form-control" name="woodSubstrate"><br>
Dimensions:
<input type="text" class="form-control" name="dimensions"><br>
Photo:
<input type="file" name="myimage"><br>
Shape Association:
<select name="shape" class="form-control">
{foreach from=$shapeArray key=key item=item}
<option value="{$key}">{$item}</option>
{/foreach}
</select><br>
{*<a class="btn btn-default btn-md add form-control">Add</a>*}
<input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">
<p>-New species has been created.-</p>
</div>
<hr>
</form>
<form action="addSpecies.php" method="post" id="updateSpecies" enctype="multipart/form-data">
<h3>Update Species:</h3>
<div class="updates">
<select name="editSpecies" class="form-control">
{if isset($speciesID)}<option value="{$speciesID}">{$commonName}</option>{/if}
{if !isset($speciesID)}
{foreach from=$speciesArray key=key item=item}
<option value="{$key}">{$item}</option>
{/foreach}
{/if}
</select><br>
{if !isset($speciesID)}
<input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectSpecies">
{/if}
Scientific Name:
<input type="text" class="form-control" name="scientificName" {if isset($scientificName)}value="{$scientificName}"{/if}><br>
Common Name:
<input type="text" name="commonName" class="form-control" {if isset($commonName)}value="{$commonName}"{/if}><br>
Name Derivation:
<input type="text" class="form-control" name="nameDerivation" {if isset($nameDerivation)}value="{$nameDerivation}"{/if}><br>
Phylum:
<input type="text" class="form-control" name="phylum" {if isset($phylum)}value="{$phylum}"{/if}><br>
Order:
<input type="text" class="form-control" name="order" {if isset($order)}value="{$order}"{/if}><br>
Family:
<input type="text" class="form-control" name="family" {if isset($family)}value="{$family}"{/if}><br>
Comment:
<input type="text" class="form-control" name="comments" {if isset($comments)}value="{$comments}"{/if}><br>
Wood Substrate:
<input type="text" class="form-control" name="woodSubstrate" {if isset($woodSubstrate)}value="{$woodSubstrate}"{/if}><br>
Dimensions:
<input type="text" class="form-control" name="dimensions" {if isset($dimensions)}value="{$dimensions}"{/if}><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateSpecies">
<p>-Shape is now updated.-</p>
</div>
<hr>
</form>
<form action="addSpecies.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
<h3>Delete Species:</h3>
<div class="updates">
<select name="removedSpecies" class="form-control">
{foreach from=$speciesArray key=key item=item}
<option value="{$key}">{$item}</option>
{/foreach}
</select><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteSpecies">
<p>-Shape is now deleted.-</p>
</div>
</form>
</div>
</div>
{*<script src="js/admin.js"></script>*}
{include "footer.tpl"}