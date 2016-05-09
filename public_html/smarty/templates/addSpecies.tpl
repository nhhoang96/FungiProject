{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}

    <!--Add new species-->
    <form action="addSpecies.php" method="post" id="newSpecies" enctype="multipart/form-data">
        <h3>New Species:</h3>

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
        Shape Association:
        <select name="shape" class="form-control">
            {foreach from=$shapeArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select><br>

        Add Image:<br>
        {if isset($photoName)}
            <img class="pic glossarypic" src="img/{$photoName}">
        {/if}

        <div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" name = "caption"/><br>
        </div>
        <input type="button" id="addDiv" value="Add More Photo"/>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">
    </form>

    <script>
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>Caption: <input type='text' name = 'caption'/><br>"

        $("#addDiv").click(function() {
            $("#addingImages").append(uploadDiv);
        });

    </script>

    {include "footer.tpl"}

</div>

