<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 00:39:01
         compiled from "smarty\templates\userGuide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18999572fb04993ef61-84016972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e639650dfc9ad8d07810da962bc68828dcea5583' => 
    array (
      0 => 'smarty\\templates\\userGuide.tpl',
      1 => 1462747134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18999572fb04993ef61-84016972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fb049947506_03553140',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fb049947506_03553140')) {function content_572fb049947506_03553140($_smarty_tpl) {?>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"><?php echo '</script'; ?>
>


<h2>Administrator Panel Guide</h2>
	<h6>*** To close the user guide, click on the exclamation mark next to control panel ***</h6>
<select id="helpOption">
	<option value="empty"><--Choose a Panel Guide--></option>
	<option value="addSpecies">Add a Species</option>
	<option value="deleteSpecies">Delete a Species</option>
	<option value="addCharacteristic">Add a Characteristic</option>
	<option value="addOptions">Add Options to a Characteristic</option>
	<option value="addShape">Add a New Shape</option>
	<option value="updateShape">Update a Shape</option>
	<option value="deleteShape">Delete a Shape</option>
	<option value="addAdmin">Add an Admin</option>
	<option value="deleteAdmin">Delete an Admin</option>
	<option value="imageUpload">Image Upload Guidelines</option>
</select>
<div class="helpText" id="addSpecies">
	<h3>Adding a Species</h3>
	<p>To add a new species, first</p>
	<ol>
		<li>Click on Species on the red sub navigation bar and select "Add species" from the dropdown. Then</li>
		<li>Enter in the appropriate information into the correct fields. Scientific Name, Common Name, and Shape Association
			are absolutely required to enter a new species.</li>
		<li>Click, Add, and you'll see a small message below confirming the addition</li>
	</ol>
	</div>
<div class="helpText" id="deleteSpecies">
	<h3>Deleting a Species</h3>
	<p>To delete a species, first</p>
	<ol>
		<li>Click on species on the red sub navigation bar and select "Delete Species"</li>
		<li>Choose the correct species from the dropdown</li>
		<li>Click Delete, and you'll see a small message below confirming the addition</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="addCharacteristic">
	<h3>Adding a Characteristic</h3>
	<p>To add a characteristic</p>
	<ol>
		<li>Click on Characteristic on the red sub navigation bar and select New Characteristic</li>
		<li>Choose the appropriate shape in the Shape Association dropdown menu</li>
		<li>Give the characteristic a Name in the characteristic box</li>
		<li>See below to add exclusive or inclusive options for the given characteristic</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="addOptions">
	<h3>Adding Options to a Characteristic</h3>
	<p>To add options to a characteristic</p>
	<ol>
		<li>Click on Characteristic on the red sub navigation bar and select New Characteristic Option</li>
		<li>Choose the appropriate characteristic association from the dropdown</li>
		<li>Name the characteristic Option</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="addShape">
	<h3>Add a New Shape</h3>
	<p>To add a new Shape for the Shape Key</p>
	<ol>
		<li>Click on Shape on the red sub navigation bar and select New Shape</li>
		<li>Add a shape</li>
		<li>Add a description</li>
		<li>Add an example photo in the image upload</li>
		<li>Click Upload</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="updateShape">
	<h3>Update a Shape</h3>
	<p>To add a new shape, </p>
	<ol>
		<li>Click on Shape on the red sub navigation bar and select New Shape</li>
		<li>Choose the appropriate shape to edit</li>
		<li>Click Select</li>
		<li>Put in a new name or description as needed</li>
		<li>Add a new example photo in the image upload if needed</li>
		<li>Click Update</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="deleteShape">
	<h3>Delete Shape</h3>
	<p>To delete a shape, </p>
	<ol>
		<li>Click on Shape on the red sub navigation bar and select New Shape</li>
		<li>Choose the appropriate shape to delete</li>
		<li>Click Delete</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="addAdmin">
	<h3>Add an Admin</h3>
	<p>To add an admin</p>
	<ol>
		<li>Click on Admin on the red sub navigation bar and select New Shape</li>
		<li>Enter the new user's email, and click Add</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="deleteAdmin">
	<h3>Delete an Admin</h3>
	<p>To delete an admin, </p>
	<ol>
		<li>Click on admin on the red sub navigation bar and select Delete Admin</li>
		<li>Choose the user's email from the dropdown, and click Delete</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>
<div class="helpText" id="imageUpload">
	<h3>Image Upload Guidelines</h3>
	<p>Keep the images in a landscape/widescreen aspect ratio(16:9 or 4:3).<br>
		Avoid portrait style images. Also, keep images to a maximum size of more than 2MB.</p>
	<ol>
		<li>First crop files as necessary to achieve the desired aspect ratio, while keeping the image as big as possible</li>
		<li>Then SCALE the image down to reduce the size as necessary</li>
		<li>Finally, crop the image to highlight the desired part of the image, maintaining the aspect ratio.</li>
		<li>*** To close the user guide, click on the exclamation mark next to control panel ***</li>
	</ol>
</div>

<?php echo '<script'; ?>
>$("#helpOption").change(function(){
	$(".helpText").hide();
	var help = "#" + $("#helpOption option:selected").val();
			$(help).show();
})
<?php echo '</script'; ?>
>
<?php }} ?>
