{include "head.tpl" title="Admin" pageName="admin"}
{*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*}

<div class="container">

    {include "adminNav.tpl"}

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName" class="form-control"><br>
            Description:
        <textarea name="description" class="form-control"></textarea><br>
            Image:
        <input type="file" name="myimage"><br>
        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
        <p>-New shape has been created.-</p>

        <hr>
    </form>




</div>