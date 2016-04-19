{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">
    {*<ul class="nav navbar-nav navbar-right logout">
        <li><a class="out" href="SHOULD LOGOUT">Logout</a></li>
    </ul>*}
    <h2>Admin Dashboard</h2>
    <hr>

    <ul class="nav nav-pills admin-nav adminNavBar">
            <li><a class="tab" href="admin.php">Edit Admin</a></li>
            <li><a class="tab" href="addShape.php">Edit Shape</a></li>
            <li><a class="tab" href="addSpecies.php">Edit Species</a></li>
            <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>

    <div class="col-lg-12 form-group dashboard" id="editAdmin">

        <form action="admin.php" method="post" id="newAdmin">
            <h3>New Admin:</h3>
            <div class="updates">
                Email:
                <input type="text" name="newAdmin" class="form-control"><br>
                {*<a class="btn btn-default btn-sm add form-control">Add</a>*}
                <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addAdmin">
                <p>-eb1338 is now an admin.-</p><br>
            </div>
            <hr>
        </form>

        <form action="admin.php" method="post" id="deleteAdmin">
            <h3>Delete Admin:</h3>
            <div class="updates">
                Email:
                <select name="removeAdmin" class="form-control">
                    {foreach from=$adminArray key=key item=item}
                        <option value="{$key}">{$item}</option>
                    {/foreach}
                </select><br>
                {*<a class="btn btn-default btn-sm add form-control">Delete</a>*}
                <input type="submit" class="btn btn-default btn-md add form-control" value="Remove" name="deleteAdmin">
                <p>-sweaver is no longer an admin.-</p>
            </div>
        </form>
    </div>

        <form action="admin.php" method="post" id="addCharacteristic">
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

        <form action="admin.php" method="post" id="addCharOption">
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
