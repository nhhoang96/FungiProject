{include "head.tpl" title="Select Shape"}

	<div class="container">

		<div class="page-header">
			<h1 class="glossarytitle">Shape Key</h1>
		</div>
		<p>The Fungi in this database are organized in 10 categories. Read and choose the descriptions and choose the shape
		that best fits your specimen.</p>
		<hr>

		{foreach $shapeData as $shape}

			<div class="col-lg-6 shape">
				<div class="left">
					<img class="pic" src="img/{$shape['Image']}">
				</div>
				<div class="right">

					<h2 class="app">{$shape['Name']}</h2>
					<p>{$shape['Description']}</p>
				</div>
				<div class="col-lg-6 paragraph_1">
					<a href="query.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md form-control space">Key</a>
					{*<a href="query.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md">Dichotomous Key</a>*}
					</div>
					<div class="col-lg-6 paragraph_2">

					<a href="species.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md form-control">
						Species List</a>
				</div>
			</div>
		{/foreach}

		{include "footer.tpl"}

	</div>
</body>
</html>