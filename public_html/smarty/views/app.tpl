{*{include "head.tpl"}*}

{include "head.tpl" title="Select Shape" active="app"}

{*{include "index.tpl"}*}

<body>

<div class="container">
	{foreach $shapeData as $shape}
  <div class="row">

	<div class="col-sm-6">


      {*<div class="card">*}

          <div class="face back">

            <div class="well well-sm inner">

				<img src="img/{$shape['Image']}" class="img-rounded">
				<h2>
					{$shape['Name']}
				</h2>
				<p>
					{$shape['Description']}

				</p>
				<p>
					{$shape["Shape_Category_ID"]}
				</p>
				{*<a href="query.php?id={$shape["Shape_Category_ID"]}">Choose Shape</a>*}
			</div>

            {*<div class="well well-sm inner">*}
				{*<img id="birdsnest" src="img/{$shape['Image']}">*}
				{*<p>*}
				{*{$shape['Description']}*}
				{*</p>*}
				{*<a href="query.php?id={$shape["Shape_Category_ID"]}>Choose Shape</a>*}
			  {$shape["Shape_Category_ID"]}
			</div>
			  {*</div>*}
          </div> <!-- end face back -->
        </div>	<!-- end card -->
	  </div>
	</div> <!-- end col-sm-6 -->
	{/foreach}

</body>
</html>