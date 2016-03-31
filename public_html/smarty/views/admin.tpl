{include "head.tpl" title="Admin" active="admin"}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<div class="container">
    {*<ul class="nav navbar-nav navbar-right logout">
        <li><a class="out" href="SHOULD LOGOUT">Logout</a></li>
    </ul>*}
    <h2>Admin Dashboard</h2>
    <hr>
    <div class="col-sm-2 admin">
        <ul class="nav nav-tabs nav-stacked edits">
            <li><a onclick="admin()" class="tab"><h4>Edit Admin</h4><hr></a></li>
            <li><a onclick="test()"   class="tab"><h4>Edit Shape</h4><hr></a></li>
            <li><a onclick="species()"   class="tab"><h4>Edit Species</h4><hr></a></li>
            <li><a class="tab"><h4>Logout</h4><hr></a></li>

        </ul>
    </div>
    <div class="col-lg-10 form-group dashboard" id="editAdmin">
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
    <div class="col-lg-10 form-group dashboard" id="editShape">
        <form action="admin.php" method="post" id="newShape" enctype="multipart/form-data">
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
        <form id="updateShape" enctype="multipart/form-data">
            <h3>Update Shape:</h3>
            <div class="updates">
                <select name="shapes" class="form-control">
                    <option>Club, Coral, Leafy</option>
                    <option>Poroid</option>
                    <option>Cup and Saucer</option>
                    <option>Gilled</option>
                    <option>Crust and Parchment</option>
                </select><br>
                <a class="btn btn-default btn-md add form-control">Select</a>

                <div class="updates">
                    Name:
                    <input type="text" class="form-control"><br>
                    Description:
                    <input type="text" class="form-control"><br>
                    Update Image:
                    <input type="file" name="myimage"><br>
                    <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Update">
                    <p>-Shape is now updated.-</p>
                </div>

            </div>
            <hr>
        </form>
        <form id="deleteShape">
            <h3>Delete Shape:</h3>
            <div class="updates">
                <select name="shapes" class="form-control">
                    <option>Club, Coral, Leafy</option>
                    <option>Poroid</option>
                    <option>Cup and Saucer</option>
                    <option>Gilled</option>
                    <option>Crust and Parchment</option>
                </select><br>
                <a class="btn btn-default btn-md add form-control">Delete</a>

                <p>-Shape is now deleted.-</p>
            </div>
        </form>
    </div>
    <div class="col-lg-10 dashboard" id="editSpecies">
        <form action="admin.php" method="post" id="newSpecies" enctype="multipart/form-data">
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
        <form id="updateSpecies">
            <h3>Update Species:</h3>
            <div class="updates">
                <select name="shape" class="form-control">
                    {foreach from=$shapeArray key=key item=item}
                        <option value="{$key}">{$item}</option>
                    {/foreach}
                </select><br>
                <a class="btn btn-default btn-md add form-control">Select</a>
                Name:
                <input type="text" class="form-control"><br>
                Description:
                <input type="text" class="form-control"><br>
                <a class="btn btn-default btn-md add form-control">Update</a>
                <p>-Shape is now updated.-</p>
            </div>
            <hr>
        </form>
        <form id="deleteSpecies">
            <h3>Delete Species:</h3>
            <div class="updates">
                <select name="shapes" class="form-control">
                    <option>Club, Coral, Leafy</option>
                    <option>Poroid</option>
                    <option>Cup and Saucer</option>
                    <option>Gilled</option>
                    <option>Crust and Parchment</option>
                </select><br>
                <a class="btn btn-default btn-md add form-control">Delete</a>

                <p>-Shape is now deleted.-</p>
            </div>
        </form>
    </div>

    <script src="js/admin.js"></script>
    {include "footer.tpl"}
</div>
</body>
</html>