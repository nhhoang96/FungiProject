{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    <h2>Admin Dashboard</h2>
    <hr>

    <!--Control Panel Navigation-->
    <ul class="nav nav-pills admin-nav adminNavBar">
        <li><a class="tab" href="admin.php">Edit Admin</a></li>
        <li><a class="tab" href="addShape.php">Edit Shape</a></li>
        <li><a class="tab" href="addSpecies.php">Edit Species</a></li>
        <li><a class="active" href="characteristic.php">Edit Characteristic</a></li>
        <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>

    <!--Add Characteristic-->
    <form action="characteristic.php" method="post" id="addCharacteristic">
        <h3>Add Characteristic:</h3><br>
        Shape Association:
        <select name="shapeID" class="form-control">
            {if isset($charShapeID)}<option value="{$charShapeID}">{$charShapeName}</option>{/if}
            {if !isset($charShapeID)}
                {foreach from=$shapeArray key=key item=item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            {/if}
        </select><br>

        {if !isset($charShapeID)}
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectCharShape">
        {/if}

        Name:
        <input type="text" class="form-control" name="newCharName"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addChar">
    </form>

    <!--Add Characteristic Option-->
    <form action="characteristic.php" method="post" id="addCharOption">
        <h3>Add Characteristic Option:</h3><br>
        Characteristic Association:
        <select name="charID" class="form-control">
            {if !isset($charID)}
                {foreach from=$charArray key=key item=item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            {/if}
        </select><br>

        Name:
        <input type="text" class="form-control" name="newOptName"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addCharOpt">
    </form>
</div>

{include "footer.tpl"}

</div>