{include "head.tpl" title="Admin"}

{if isset($msg)}{$msg}{/if}
{if isset($msg3)}{$msg3}{/if}

<h1> Add Shape Form</h1>

<form action="addShape.php" method="post">
    Shape Name:
    <input type="text" name="shapeName"><br>
    Shape Description:
    <input type="text" name="description"><br>
    Photo:
    {*<input type="file" name="fileToUpload" id="fileToUpload">*}
    <input type="submit" class="btn" value="Submit" name="submit">
</form>

<h1>Add Species Form</h1>
<form action="addSpecies.php" method="post">
    Common Name:
    <input type="text" name="commonName"><br>
    Name derivation:
    <input type="text" name="nameDerivation"><br>
    Scientific Name:
    <input type="text" name="scientificName"><br>
    Phylum:
    <input type="text" name="phylum"><br>
    Order:
    <input type="text" name="order"><br>
    Family:
    <input type="text" name="family"><br>
    Comment:
    <input type="text" name="comments"><br>
    Wood substrate:
    <input type="text" name="woodSubstrate"><br>
    Dimensions:
    <input type="text" name="dimensions"><br>
    Shape Category:
    <select name="shape">
    {foreach from=$shapeArray key=key item=item}
    <option value="{$key}">{$item}</option>
    {/foreach}
    </select><br>
    <input type="submit" class="btn" value="blue" name="submit">


</form>

</body>
</html>