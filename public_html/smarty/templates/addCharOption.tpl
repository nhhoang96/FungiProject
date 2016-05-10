{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}

    <!--Add Characteristic Option-->
    <form action="addCharOption.php" method="post" id="addCharOption">
        <h3>Add Characteristic Option:</h3><br>
        Characteristic Association:
        <select name="charID" class="form-control">
            {if !isset($charID)}
                {foreach from=$charArray key=key item=item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            {/if}
        </select><br>

        Name:
        <input type="text" class="form-control" name="newOptName"><br>
        <input type="submit" class="btn btn-default btn-md add form-control resetSpace" value="Add" name="addCharOpt">
        <input type="submit" class="btn btn-danger btn-md add form-control" name="reset" value="Reset">
    </form>

    {include "footer.tpl"}

</div>