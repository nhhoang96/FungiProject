{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}

    <!--Delete admin-->
    <form action="deleteAdmin.php" method="post" id="deleteAdmin">
        <h3>Delete Admin:</h3>
        Email:
        <select name="removeAdmin" class="form-control">
            {foreach from=$adminArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Remove" name="deleteAdmin">
    </form>

    {include "footer.tpl"}

</div>