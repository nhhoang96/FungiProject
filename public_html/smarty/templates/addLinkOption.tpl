{include "head.tpl" title="Admin" pageName="admin"}
<div class="container">

    {include "adminNav.tpl"}

    <form action="addLinkOption.php" method="post" id="linkOption">
        <h3>Link Characteristic Options to Species:</h3><br>
        Species Association:
        <select name="speciesID" class="form-control">
            {if isset($speciesID)}<option value="{$speciesID}">{$commonName}</option>{/if}
            {if !isset($speciesID)}
                {foreach from=$speciesArray key=key item=item}
                    <option value="{$key}">{$item}</option>
                {/foreach}
            {/if}
        </select><br>
        {if !isset($speciesID)}
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectSpecies">
        {/if}
        {if isset($speciesID)}
            Name:

            <table id="example">
                <thead>
                <tr>
                    <th> Characteristic</th>
                    <th> Option_Name</th>
                </tr>
                </thead>
                <tbody>
                {foreach $charList as $char}
                    {foreach $char.options as $opt}
                        <tr>
                            <td> {$char.Name}</td>
                            <td>
                                <input type="checkbox" name="optionIDs[]" value="{$opt.Opt_ID}"
                                       {if isset($options)}{foreach $options as $option}{if $opt.Opt_ID == $option}checked{/if}{/foreach}{/if}>
                                {$opt.Opt_Name}
                            </td>
                        </tr>
                    {/foreach}
                {/foreach}
                </tbody>
            </table>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function(){
                    $("#example").DataTable();
                });
            </script>

            <input type="submit" class="btn btn-default btn-md add form-control resetSpace" value="Add" name="addLinks">
            <input type="submit" class="btn btn-danger btn-md add form-control" name="reset" value="Reset">
        {/if}

    </form>


    {include "footer.tpl"}

</div>