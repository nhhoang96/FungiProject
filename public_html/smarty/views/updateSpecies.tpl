{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Update species-->
    <form action="updateSpecies.php" method="post" id="updateSpecies" enctype="multipart/form-data">
        <h3>Update Species:</h3>
        <select name="speciesID" class="form-control">
            {if isset($speciesID)}
                <option value="{$speciesID}">{$commonName}</option>
            {/if}
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
        <input type="text" class="form-control" name="scientificName"
               {if isset($scientificName)}value="{$scientificName}"{/if}><br>
        Common Name:
        <input type="text" name="commonName" class="form-control"
               {if isset($commonName)}value="{$commonName}"{/if}><br>
        Name Derivation:
        <input type="text" class="form-control" name="nameDerivation"
               {if isset($nameDerivation)}value="{$nameDerivation}"{/if}><br>
        Phylum:
        <input type="text" class="form-control" name="phylum"
               {if isset($phylum)}value="{$phylum}"{/if}><br>
        Order:
        <input type="text" class="form-control" name="order"
               {if isset($order)}value="{$order}"{/if}><br>
        Family:
        <input type="text" class="form-control" name="family"
               {if isset($family)}value="{$family}"{/if}><br>
        Comment:
        <input type="text" class="form-control" name="comments"
               {if isset($comments)}value="{$comments}"{/if}><br>
        Wood Substrate:
        <input type="text" class="form-control" name="woodSubstrate"
               {if isset($woodSubstrate)}value="{$woodSubstrate}"{/if}><br>
        Dimensions:
        <input type="text" class="form-control" name="dimensions"
               {if isset($dimensions)}value="{$dimensions}"{/if}><br>
        Update Image:<br>
        {if isset($photoName)}
            <img class="pic glossarypic" src="img/{$photoName}">
        {/if}
        <input type="file" name="myimage"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateSpecies">
        <p>-Shape is now updated.-</p>
        <hr>
    </form>

    {include "footer.tpl"}

</div>