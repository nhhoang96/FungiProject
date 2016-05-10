{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}
    {if isset($msg)}<h3 id="warning">{$msg}</h3>{/if}

    <!--Add new species-->
    <form action="addSpecies.php" method="post" id="newSpecies" enctype="multipart/form-data">
        <h3>New Species:</h3>

        Scientific Name:
        <input type="text" name="commonName"
                {if isset($commonName)}
                    value="{$commonName}"{/if}
               class="form-control"><br>
        Common Name:
        <input type="text" class="form-control"
                {if isset($nameDerivation)}
                    value="{$nameDerivation}"{/if}
               name="nameDerivation"><br>
        Name Derivation:
        <input type="text" class="form-control"
                {if isset($scientificName)}
                    value="{$scientificName}"{/if}
               name="scientificName"><br>
        Phylum:
        <input type="text" class="form-control"
                {if isset($phylum)}
                    value="{$phylum}"{/if}
               name="phylum"><br>
        Order:
        <input type="text" class="form-control"
                {if isset($order)}
                    value="{$order}"{/if}
               name="order"><br>
        Family:
        <input type="text" class="form-control"
                {if isset($family)}
                    value="{$family}"{/if}
               name="family"><br>
        Comment:
        <input type="text" class="form-control"
                {if isset($comments)}
                    value="{$comments}"{/if}
               name="comments"><br>
        Wood Substrate:
        <input type="text" class="form-control"
                {if isset($woodSubstrate)}
                    value="{$woodSubstrate}"{/if}
               name="woodSubstrate"><br>
        Dimensions:
        <input type="text" class="form-control"
                {if isset($dimensions)}
                    value="{$dimensions}"{/if}
               name="dimensions"><br>
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
            Caption: <input type="text" class="form-control" name="caption[0]"/><br>
        </div>
        <input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add More Photo"/>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">

    </form>
    <script>
        var count = 0;
    </script>

    <!--- JQuery function to upload more images--->
    <script>

        $("#addDiv").click(function() {
            count = count + 1;
            var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>" +
                    "Caption: <input type='text' class='form-control'  name='caption["+count+"]'/><br>";
            $("#addingImages").append(uploadDiv);
        });

    </script>
    {include "footer.tpl"}

</div>


