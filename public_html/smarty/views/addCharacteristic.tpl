{include "head.tpl" title="addCharacteristic" pageName="characteristic"}

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
        <li><a class="tab" href="addCharacteristic.php">Edit Characteristic</a></li>
        <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>
{if isset($success)}<h3>{$success}</h3>{/if}
    <form action="addCharacteristic.php" method="post" id="addCharacteristic">
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
        <input type="submit" name="reset" value="Reset">
    </form>

    <form action="addCharacteristic.php" method="post" id="addCharOption">
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
        <input type="submit" name="reset" value="Reset">
    </form>

    <form action="addCharacteristic.php" method="post" id="linkOption">
        <h3>Link Characteristic Options to Species:</h3><br>
        Species Association:
        <select name="speciesID" class="form-control">
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
        Name:

        <table id="example">
            <thead>
            <tr>
                <th> Characteristic</th>
                <th> Option_Name</th>
            </tr>
            </thead>
            <tbody>
            {foreach $charList as $char}
                {foreach $char.options as $opt}
                    <tr>
                        <td> {$char.Name}</td>
                        <td> <input type="checkbox" name="characteristics" value="{$opt.Opt_ID}">{$opt.Opt_Name}</td>
                    </tr>
                {/foreach}
            {/foreach}
            </tbody>
        </table>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#example").DataTable();
            });
        </script>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="linkOpt">
        <input type="submit" name="reset" value="Reset">
    </form>
</div>

{include "footer.tpl"}
