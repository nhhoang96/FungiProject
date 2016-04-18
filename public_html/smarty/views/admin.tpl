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

        <form action="admin.php" method="post" id="updateShape" enctype="multipart/form-data">

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
                    {*<input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Update">*}
                    <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
                    <p>-Shape is now updated.-</p>
                </div>

            </div>
            <hr>
        </form>
        <form action="admin.php" method="post" id="deleteShape">
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
                {if isset($charID)}<option value="{$charID}">{$charName}</option>{/if}
                {if !isset($charID)}
                    {foreach from=$charArray key=key item=item}
                        <option value="{$key}">{$item}</option>
                    {/foreach}
                {/if}
            </select><br>

            {if !isset($charID)}
                <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectCharOpt">
            {/if}

            Name:
            <input type="text" class="form-control" name="newOptName"><br>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addCharOpt">
        </form>
    </div>
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
        <form action="admin.php" method="post" id="updateSpecies" enctype="multipart/form-data">
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
        <form action="admin.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
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
    <script src="js/admin.js"></script>
    {include "footer.tpl"}
</div>
</body>
</html>
