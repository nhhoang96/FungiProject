{include "head.tpl" title="Admin" pageName="admin"}

<div class="container">

    {include "adminNav.tpl"}
    {if isset($msg)}<h3 id="warning">{$msg}</h3>{/if}

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName"
                {if isset($shapeName)}
                    value="{$shapeName}"{/if}
               class="form-control"><br>
            Description:
        <textarea name="description"
                {if isset($description)}
                    value="{$description}"{/if}
                  class="form-control"></textarea><br>
            Image:
        <input type="file" name="myimage"><br>
        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
    </form>

    {include "footer.tpl"}

</div>