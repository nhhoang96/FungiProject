<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-29 21:13:40
         compiled from "smarty\views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2194256f4b41a6c85e5-60711128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45951e41a6af186cc9d444e06c8cef33884c955' => 
    array (
      0 => 'smarty\\views\\admin.tpl',
      1 => 1459278819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2194256f4b41a6c85e5-60711128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f4b41a8d19e9_79427401',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4b41a8d19e9_79427401')) {function content_56f4b41a8d19e9_79427401($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Control Panel",'active'=>"Control Panel"), 0);?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>

<div class="container">
        
        <h2>Admin Dashboard</h2>
    <hr>
    <div class="col-sm-2 admin">
        <ul class="nav nav-tabs nav-stacked edits">
            <li><a onclick="admin()" class="tab"><h4>Edit Admin</h4><hr></a></li>
            <li><a onclick="test()"   class="tab"><h4>Edit Shape</h4><hr></a></li>
            <li><a onclick="species()"   class="tab"><h4>Edit Species</h4><hr></a></li>
            <li><a class="tab"><h4>Logout</h4><hr></a></li>

        </ul>
    </div>
    <div class="col-lg-10 form-group dashboard" id="editAdmin">
        <form id="newAdmin">
            <h3>New Admin:</h3>
            <div class="updates">
                Email:
                <input type="text" class="form-control"><br>
                <a class="btn btn-default btn-sm add form-control">Add</a>
                <p>-eb1338 is now an admin.-</p><br>

            </div>
            <hr>
        </form>

        <form id="deleteAdmin">
            <h3>Delete Admin:</h3>
            <div class="updates">
            Email:
            <select name="email" class="form-control">
                <option>eb1338</option>
                <option>sweaver</option>
                <option>gemberger</option>
                <option>hh1234</option>
                <option>zc5678</option>
            </select><br>
            <a class="btn btn-default btn-sm add form-control">Delete</a>
                <p>-sweaver is no longer an admin.-</p>
            </div>
        </form>
    </div>
    <div class="col-lg-10 form-group dashboard" id="editShape">
        <form id="newShape">
            <h3>New Shape:</h3>
                <div class="updates">
                    Name:
                    <input type="text" class="form-control"><br>
                    Description:
                    <input type="text" class="form-control"><br>
                    <a class="btn btn-default btn-sm add form-control">Add</a>
                    <p>-New shape has been created.-</p>
                </div>
            <hr>
        </form>
        <form id="updateShape">
            <h3>Update Shape:</h3>
            <div class="updates">
            <select name="shapes" class="form-control">
                <option>Club, Coral, Leafy</option>
                <option>Poroid</option>
                <option>Cup and Saucer</option>
                <option>Gilled</option>
                <option>Crust and Parchment</option>
            </select><br>
                <a class="btn btn-default btn-md add form-control">Select</a>

                <div class="updates">
                Name:
                <input type="text" class="form-control"><br>
                Description:
                <input type="text" class="form-control"><br>
                    <a class="btn btn-default btn-md add form-control">Update</a>
                    <p>-Shape is now updated.-</p>
                </div>

            </div>
            <hr>
        </form>
        <form id="deleteShape">
            <h3>Delete Shape:</h3>
            <div class="updates">
            <select name="shapes" class="form-control">
                <option>Club, Coral, Leafy</option>
                <option>Poroid</option>
                <option>Cup and Saucer</option>
                <option>Gilled</option>
                <option>Crust and Parchment</option>
            </select><br>
            <a class="btn btn-default btn-md add form-control">Delete</a>

            <p>-Shape is now deleted.-</p>
            </div>
        </form>
    </div>
    <div class="col-lg-10 dashboard" id="editSpecies">
        <form id="newSpecies">
            <h3>New Species:</h3>
            <div class="updates">
                Scientific Name:
                <input type="text" class="form-control"><br>
                Common Name:
                <input type="text" class="form-control"><br>
                Name Derivation:
                <input type="text" class="form-control"><br>
                Phylum:
                <input type="text" class="form-control"><br>
                Order:
                <input type="text" class="form-control"><br>
                Family:
                <input type="text" class="form-control"><br>
                Comment:
                <input type="text" class="form-control"><br>
                Wood Substrate:
                <input type="text" class="form-control"><br>
                Dimensions:
                <input type="text" class="form-control"><br>
                Photo:
                <input type="text" class="form-control"><br>
                Shape Association:
                <input type="text" class="form-control"><br>
                <a class="btn btn-default btn-md add form-control">Add</a>
                <p>-New species has been created.-</p>
            </div>
            <hr>
        </form>
        <form id="updateSpecies">
            <h3>Update Species:</h3>
            <div class="updates">
                <select name="shapes" class="form-control">
                    <option>Club, Coral, Leafy</option>
                    <option>Poroid</option>
                    <option>Cup and Saucer</option>
                    <option>Gilled</option>
                    <option>Crust and Parchment</option>
                </select><br>
                <a class="btn btn-default btn-md add form-control">Select</a>
                Name:
                <input type="text" class="form-control"><br>
                Description:
                <input type="text" class="form-control"><br>
                <a class="btn btn-default btn-md add form-control">Update</a>
                <p>-Shape is now updated.-</p>
            </div>
            <hr>
        </form>
        <form id="deleteSpecies">
            <h3>Delete Species:</h3>
            <div class="updates">
            <select name="shapes" class="form-control">
                <option>Club, Coral, Leafy</option>
                <option>Poroid</option>
                <option>Cup and Saucer</option>
                <option>Gilled</option>
                <option>Crust and Parchment</option>
            </select><br>
            <a class="btn btn-default btn-md add form-control">Delete</a>

            <p>-Shape is now deleted.-</p>
            </div>
        </form>
    </div>



    <?php echo '<script'; ?>
 type="text/javascript">
        //require(['jquery'], function ($){
            function admin() {
                //document.getElementById("newAdmin").show();
                //alert("why is this not working?");
                $("#newAdmin").show();
                $("#deleteAdmin").show();
                $("#newShape").hide();
                $("#updateShape").hide();
                $("#deleteShape").hide();
                $("#newSpecies").hide();
                $("#updateSpecies").hide();
                $("#deleteSpecies").hide();
                //$("editAdmin").show()
                //$("editShape").hide()
                //$("editSpecies").hide()


            }
            function test() {
                //alert("species");
                $("#newAdmin").hide();
                $("#deleteAdmin").hide();
                $("#newShape").show();
                $("#updateShape").show();
                $("#deleteShape").show();
                $("#newSpecies").hide();
                $("#updateSpecies").hide();
                $("#deleteSpecies").hide();
                //$("editAdmin").hide()
                //$("editShape").show()
                //$("editSpecies").hide()




            }

            function species() {
                //alert("species");
                $("#newAdmin").hide();
                $("#deleteAdmin").hide();
                $("#newShape").hide();
                $("#updateShape").hide();
                $("#deleteShape").hide();
                $("#newSpecies").show();
                $("#updateSpecies").show();
                $("#deleteSpecies").show();
                //$("editAdmin").hide()
                //$("editShape").hide()
                //$("editSpecies").show()
            }

    <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
