{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    <h2>Admin Dashboard</h2>
    <hr>

    <!--Control Panel Navigation-->
    <ul class="nav nav-pills admin-nav adminNavBar">
        <li><a class="tab" href="admin.php">Edit Admin</a></li>
        <li><a class="active" href="addShape.php">Edit Shape</a></li>
        <li><a class="tab" href="addSpecies.php">Edit Species</a></li>
        <li><a class="tab" href="characteristic.php">Edit Characteristic</a></li>
        <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName" class="form-control"><br>
            Description:
        <textarea name="description" class="form-control"></textarea><br>
            Image:
        <input type="file" name="myimage"><br>
        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
        <p>-New shape has been created.-</p>

        <hr>
    </form>

    <!--Update Shape-->
    <form action="addShape.php" method="post" id="updateShape" enctype="multipart/form-data">
        <h3>Update Shape:</h3>
            Shape Association:
            <select name="shapeID" class="form-control">

                {if isset($editShapeID)}
                    <option value="{$editShapeID}">{$editShapeName}</option>
                {/if}

                {if !isset($editShapeID)}
                    {foreach from=$shapeArray key=key item=item}
                        <option value="{$key}">{$item}</option>
                    {/foreach}
                {/if}
            </select><br>

        {if !isset($editShapeID)}
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectShape">
        {/if}

        Name:
        <input type="text" class="form-control" name="updateShapeName"
               {if isset($editShapeName)}value="{$editShapeName}"{/if}>
        <br>

        Description:
        <textarea class="form-control" name="updateShapeDescription">
            {if isset($editShapeDescription)}{$editShapeDescription}{/if}
        </textarea>
        <br>

        Update Image:<br>
        {if isset($editShapeImage)}
            <img class="pic glossarypic" src="img/{$editShapeImage}">
        {/if}
        <input type="file" name="myimage"><br>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
        <p>-Shape is now updated.-</p>
        <hr>
    </form>

    <!--Delete Shape-->
    <form action="addShape.php" method="post" id="deleteShape">
        <h3>Delete Shape:</h3>

        Shape Association:
        <select name="shapeID" class="form-control">
            {foreach from=$shapeArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select>
        <br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">
        <p>-Shape is now deleted.-</p>
    </form>

    {include "footer.tpl"}
</div>