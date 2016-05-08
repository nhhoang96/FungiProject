{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Delete species-->
    <form action="deleteSpecies.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
        <h3>Delete Species:</h3>
        <select name="removedSpecies" class="form-control">
            {foreach from=$speciesArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteSpecies">
    </form>

    {include "footer.tpl"}

</div>
