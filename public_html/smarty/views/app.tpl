{include "head.tpl" title="Select Shape" active="app"}
<<<<<<< HEAD
=======


<!--Fungi Team 2015-->
>>>>>>> d28c0e6ab820732dfced5e9f1652cbfca7e4f521

<!--Fungi Team 2015-->
<body>
	
<div class="container">
  <div class="row">
    
	{foreach $shapeData as $shape}
	<div class="col-sm-6">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="well well-sm inner">
				<img src="img/{$shape['img']}" class="img-rounded">
				<h2>
					{$shape['name']}
				</h2>
			</div>
          </div> 
          <div class="face back"> 
            <div class="well well-sm inner">
				<img id="birdsnest" src="img/{$shape['img']}">
				<p>
				{$shape['description']}
				</p>
				<p>{$shape['link']}</p>
			</div>
          </div> <!-- end face back -->
        </div>	<!-- end card -->
      </div> <!-- end flip -->
	</div> <!-- end col-sm-6 -->
	{/foreach}
	
  </div> <!-- end row -->
</div> <!-- end container -->
	
</body>
</html>