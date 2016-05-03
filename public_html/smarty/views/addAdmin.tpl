{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}

    <!--Add new admin-->
    <form action="addAdmin.php" method="post" id="newAdmin">
        <h3>New Admin:</h3>
            Email:
            <input type="text" name="newAdmin" class="form-control"><br>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addAdmin">
            <p>-eb1338 is now an admin.-</p><br>
    </form>

        {*<form action="admin.php" method="post" id="addCharacteristic">*}
            {*<h3>Add Characteristic:</h3><br>*}
            {*Shape Association:*}
            {*<select name="shapeID" class="form-control">*}
                {*{if isset($charShapeID)}<option value="{$charShapeID}">{$charShapeName}</option>{/if}*}
                {*{if !isset($charShapeID)}*}
                    {*{foreach from=$shapeArray key=key item=item}*}
                        {*<option value="{$key}">{$item}</option>*}
                    {*{/foreach}*}
                {*{/if}*}
            {*</select><br>*}

            {*{if !isset($charShapeID)}*}
                {*<input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectCharShape">*}
            {*{/if}*}

            {*Name:*}
            {*<input type="text" class="form-control" name="newCharName"><br>*}
            {*<input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addChar">*}
        {*</form>*}

        {*<form action="admin.php" method="post" id="addCharOption">*}
            {*<h3>Add Characteristic Option:</h3><br>*}
            {*Characteristic Association:*}
            {*<select name="charID" class="form-control">*}
                {*{if !isset($charID)}*}
                    {*{foreach from=$charArray key=key item=item}*}
                        {*<option value="{$key}">{$item}</option>*}
                    {*{/foreach}*}
                {*{/if}*}
            {*</select><br>*}

            {*Name:*}
            {*<input type="text" class="form-control" name="newOptName"><br>*}
            {*<input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addCharOpt">*}
        {*</form>*}
    {include "footer.tpl"}
</div>


