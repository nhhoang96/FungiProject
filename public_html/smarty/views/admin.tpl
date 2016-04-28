{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

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


</div>

{include "footer.tpl"}
