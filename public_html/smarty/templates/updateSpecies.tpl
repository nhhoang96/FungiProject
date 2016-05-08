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
        <textarea type="text" class="form-control" name="comments">
               {if isset($comments)}{$comments}{/if}
        </textarea><br>
        Wood Substrate:
        <input type="text" class="form-control" name="woodSubstrate"
               {if isset($woodSubstrate)}value="{$woodSubstrate}"{/if}><br>
        Dimensions:
        <input type="text" class="form-control" name="dimensions"
               {if isset($dimensions)}value="{$dimensions}"{/if}><br>

        Image:<br>


        {if isset($photos)}
            {if !is_null($photos)}
                {if !empty($photos)}
                    <div class="hs">
                        <div class="showcase">
                            <ul style="width:2000px;">
                                <table>
                                    <tr class="row">
                                        {foreach $photos as $pic}
                                            <th class = "col-md-1 imageBox">
                                                <img src="img/{$pic['Photo_Name']}" width="250" height="200"><br>
                                                <input name="checkbox[]" type="checkbox" value="{$pic['Photo_ID']}/>
                                                <div class="col-md-12">
                                                    {$pic['Caption']}
                                                </div>
                                            </th>
                                        {/foreach}
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                {/if}
            {/if}
        {/if}
        **Check boxes to delete image
<div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" class="form-control" name="caption"/><br>
            </div>
        <input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add Another Photo">
        <input type="submit" class="btn btn-default btn-md add form-control resetSpace" value="Update" name="updateSpecies">
        <input type="submit" class="btn btn-danger btn-md add form-control" name="reset" value="Reset">

    </form>


   <!--- JQuery function to upload more images--->
    <script>
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>Caption: <input type='text' class='form-control' name='caption'/><br>"

        $("#addDiv").click(function() {
            $("#addingImages").append(uploadDiv);
        });

    </script>

    {include "footer.tpl"}

</div>