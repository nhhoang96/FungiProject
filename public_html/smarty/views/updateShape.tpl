{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Update Shape-->
    <form action="updateShape.php" method="post" id="updateShape" enctype="multipart/form-data">
        <h3>Update Shape:</h3>
        Shape Association:
        <select name="shapeID" class="form-control">

            {if isset($editShapeID)}
                <option value="{$editShapeID}">{$editShapeName}</option>
            {/if}

            {if !isset($editShapeID)}
                {foreach from=$shapeArray key=key item=item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            {/if}
        </select><br>

        {if !isset($editShapeID)}
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectShape">
        {/if}

        Name:
        <input type="text" class="form-control" name="updateShapeName"
               {if isset($editShapeName)}value="{$editShapeName}"{/if}>
        <br>

        Description:
            <textarea class="form-control" name="updateShapeDescription">
                {if isset($editShapeDescription)}{$editShapeDescription}{/if}
            </textarea>
        <br>

        Update Image:<br>
        {if isset($editShapeImage)}
            <img class="pic glossarypic" src="img/{$editShapeImage}">
        {/if}
        <input type="file" name="myimage"><br>
        {*<div id="addingImages">*}
            {*<div class="uploadDiv">*}
                {*<input name="file[]" type="file" id="file"/>*}
            {*</div>*}
            {*Caption: <input type="text" name = "caption"/><br>*}
        {*</div>*}
        {*<input type="button" id="addDiv" value="Add More Photo"/>*}

        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
        <input type="submit" name="reset" value="Reset">
    </form>

    {include "footer.tpl"}

</div>