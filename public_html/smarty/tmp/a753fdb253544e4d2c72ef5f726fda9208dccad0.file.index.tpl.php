<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-01 15:00:25
         compiled from "smarty/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:869162159551c404956e103-51317819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a753fdb253544e4d2c72ef5f726fda9208dccad0' => 
    array (
      0 => 'smarty/views/index.tpl',
      1 => 1427914727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869162159551c404956e103-51317819',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551c4049605bf4_68683672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c4049605bf4_68683672')) {function content_551c4049605bf4_68683672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Brett Levengood"), 0);?>

<!--Brett Levengood 2015-->

<body class="loading">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
       	
       	<div id="preload">
	       	<img src="img/bcg_slide-1.jpg">
	       	<img src="img/bcg_slide-2.jpg">
       	</div>
       	
       	<main>
       		<!-- Navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top">
	  			<div class="navbar-inner">
	  				<div class="container">
		    			<a class="brand" href="#">Brett Levengood</a>
		    			<ul class="nav">
		    				<li><a href="https://www.linkedin.com/in/blevengood" target="_blank">LinkedIn</a></li>
                			<li><a href="https://twitter.com/blevengood" target="_blank">Twitter</a></li>
                			<li><a href="mailto:blevengood8@gmail.com">Email</a></li>
		    			</ul>
					</div>
	  			</div>
			</div>
       	 
       	 	<!--Section 1-->
	        <section id="slide-1" class="homeSlide">
	        	<div class="bcg">
		        	<div class="container">
	    				<div class="row">
	    					<div class="span6 offset3 well text-center top-buffer">
	    						<h2>I'm Brett.</h2>
	    						<h3>Sometimes I write code.</h3>
	    						<p>Take a look at my current projects below or contact me with the links above.</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
		    </section>
		    
		    <!--Section 2-->
		    <section id="slide-2" class="homeSlide">
		    	<div class="bcg">
		        	<div class="container">
	    				<div class="row">
	    					<div class="span4 offset4 well text-center top-buffer">
	    						<h2>Current Projects</h2>
	    					</div>
	    				</div>
	    				<div class="row">
	    					<div class="span3 offset2 well top-buffer">
	    						<a href="http://www.prismdot.com" target="_blank"><h3>PrismDot</h3></a>
	    						<p>More details to come after launch!
	    					</div>
	    				</div>
	    			</div>
	    		</div>
		    	</div>
		    </section>
		</main>

        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="js/vendor/jquery-1.9.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/imagesloaded.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/skrollr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/_main.js"><?php echo '</script'; ?>
>

    </body>
</html>

<?php }} ?>
