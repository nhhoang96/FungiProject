
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


<h2>Administrator Panel Guide</h2>
<h6>*** To close the user guide, click on the exclamation mark next to control panel ***</h6>
<select id="helpOption">
	<option value="empty"><--Choose a Panel Guide--></option>
	<option value="addSpecies">Add a Species</option>
	<option value="updateSpecies">Update a Species</option>
	<option value="deleteSpecies">Delete a Species</option>
	<option value="addCharacteristic">Add a Characteristic</option>
	<option value="addOptions">Add Options to a Characteristic</option>
	<option value="linkOptions">Linking Options to Characteristic</option>
	<option value="deleteCharacteristic">Delete Characteristic Options</option>
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
<div class="helpText" id="updateSpecies">
	<h3>Updating a Species</h3>
	<p>To update a new species, first</p>
	<ol>
		<li>Click on Species on the red sub navigation bar and select "Update Species" from the dropdown.</li>
		<li>Select the desired species for update from that dropdown</li>
		<li>Press select</li>
		<li>Enter in the appropriate information into the correct fields that need to be updated.</li>
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
	</ol>
</div>
<div class="helpText" id="addOptions">
	<h3>Adding Options to a Characteristic</h3>
	<p>To add options to a characteristic</p>
	<ol>
		<li>Click on Characteristic on the red sub navigation bar and select New Characteristic Option</li>
		<li>Choose the appropriate characteristic association from the dropdown</li>
		<li>Name the characteristic Option</li>
	</ol>
</div>
<div class="helpText" id="linkOptions">
	<h3>To link options to characteristics</h3>
	<ol>
		<li>From the striped table, use the search or the previous/next buttons to find the desired <br>
		characteristic that will be paired with the shape</li>
		<li>Choose the appropriate characteristic association from the dropdown</li>
		<li>Name the characteristic Option</li>
	</ol>
</div>
<div class="helpText" id="deleteCharacteristic">
	<h3>To delete characteristic options,</h3>
	<ol>
		<li>Click on Shape on the red sub navigation bar and select Delete Shape</li>
		<li>Choose the desired shape from which options will be deleted</li>
		<li>Then, choose the desired option(s) to delete</li>
		<li>Click Delete</li>
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
	</ol>
</div>
<div class="helpText" id="deleteShape">
	<h3>Delete Shape</h3>
	<p>To delete a shape, </p>
	<ol>
		<li>Click on Shape on the red sub navigation bar and select New Shape</li>
		<li>Choose the appropriate shape to delete</li>
		<li>Click Delete</li>
	</ol>
</div>
<div class="helpText" id="addAdmin">
	<h3>Add an Admin</h3>
	<p>To add an admin</p>
	<ol>
		<li>Click on Admin on the red sub navigation bar and select New Shape</li>
		<li>Enter the new user's email, and click Add</li>
	</ol>
</div>
<div class="helpText" id="deleteAdmin">
	<h3>Delete an Admin</h3>
	<p>To delete an admin, </p>
	<ol>
		<li>Click on admin on the red sub navigation bar and select Delete Admin</li>
		<li>Choose the user's email from the dropdown, and click Delete</li>
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
	</ol>
</div>

<script>$("#helpOption").change(function(){
		$(".helpText").hide();
		var help = "#" + $("#helpOption option:selected").val();
		$(help).show();
	})
</script>
