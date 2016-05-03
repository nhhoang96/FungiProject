{include "head.tpl" title="Admin" pageName="admin"}
<div class="container">

{include "adminNav.tpl"}

    {if isset($success)}<h3>{$success}</h3>{/if}

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
                        <td> <input type="checkbox" name="characteristics" value="{$opt.Opt_ID}">{$opt.Opt_Name}</td>
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
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="linkOpt">
        <input type="submit" name="reset" value="Reset">
    </form>


    <input type="submit" name="reset" value="Reset">


    {include "footer.tpl"}

</div>