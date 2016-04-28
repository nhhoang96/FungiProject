{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

<h2>Admin Dashboard</h2>

<ul class="nav nav-pills admin-nav adminNavBar">
<li><a class="tab" href="admin.php">Edit Admin</a></li>
<li><a class="tab" href="addShape.php">Edit Shape</a></li>
<li><a class="tab" href="addSpecies.php">Edit Species</a></li>
    <li><a class="tab" href="characteristic.php">Edit Characteristic</a></li>
<li><a class="tab" href="logout.php">Logout</a></li>

</ul>

<div class="col-lg-12 form-group dashboard" id="editShape">
<form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
<h3>New Shape:</h3>
<div class="updates">
Name:
<input type="text" name="shapeName" class="form-control"><br>
Description:
<input type="text" name="description" class="form-control"><br>
{*<a class="btn btn-default btn-sm add form-control">Add</a>*}
{*<input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addShape">*}
Upload Image:
<input type="file" name="myimage"><br>
<input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
<p>-New shape has been created.-</p>
</div>
<hr>
</form>

<form action="addShape.php" method="post" id="updateShape" enctype="multipart/form-data">

<h3>Update Shape:</h3>
<div class="updates">
Shape Association:
<select name="shapeID" class="form-control">
{if isset($editShapeID)}<option value="{$editShapeID}">{$editShapeName}</option>{/if}
{if !isset($editShapeID)}
{foreach from=$shapeArray key=key item=item}
<option value="{$key}">{$item}</option>
{/foreach}
{/if}
</select><br>

{if !isset($editShapeID)}
<input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectShape">
{/if}

<div class="updates">
Name:
<input type="text" class="form-control" name="updateShapeName" {if isset($editShapeName)}value="{$editShapeName}"{/if}><br>
Description:
<input type="text" class="form-control" name="updateShapeDescription" {if isset($editShapeDescription)}
value="{$editShapeDescription}"{/if}><br>
Update Image:
<input type="file" name="myimage"><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
<p>-Shape is now updated.-</p>
</div>

</div>
<hr>
</form>
<form action="addShape.php" method="post" id="deleteShape">
<h3>Delete Shape:</h3>
<div class="updates">
Shape Association:
<select name="shapeID" class="form-control">
{foreach from=$shapeArray key=key item=item}
<option value="{$key}">{$item}</option>
{/foreach}
</select><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">

<p>-Shape is now deleted.-</p>
</div>
</form>
</div>
</div>
{include "footer.tpl"}