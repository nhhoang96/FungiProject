{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Delete Shape-->
    <form action="deleteShape.php" method="post" id="deleteShape">
        <h3>Delete Shape:</h3>

        Shape Association:
        <select name="shapeID" class="form-control">
            {foreach from=$shapeArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
        </select>
        <br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">
        <p>-Shape is now deleted.-</p>
    </form>

    {include "footer.tpl"}
</div>