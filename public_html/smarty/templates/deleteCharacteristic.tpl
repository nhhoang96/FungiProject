{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Delete Shape-->
    <form action="deleteCharacteristic.php" method="post" enctype="multipart/form-data" id="deleteCharacteristic">
        <h3>Delete Characteristic:</h3>

        <select name="removedCharacteristic" class="form-control">
            {foreach from=$charArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select>
        <br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteCharacteristic">
    </form>

    {include "footer.tpl"}
</div>