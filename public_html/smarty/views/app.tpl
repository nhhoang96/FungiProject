{include "head.tpl" title="Select Shape" active="app"}

<body>
	<div class="container">

		{foreach $shapeData as $shape}

		<div class="col-lg-5 shape">
			{*<div class="shape">*}
				<div class="col-lg-6 left">
					<img class="pic" src="img/{$shape['Image']}">
				</div>
				<div class="col-lg-6 right">
					<h2>{$shape['Name']}</h2>
					<p>{$shape['Description']}</p>
				</div>
				<div class="col-lg-12 sort">
					<a href="query.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md">Multi-Access Key</a>
					<a href="query.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md">Dichotomous Key</a>
					<a href="query.php?id={$shape['Shape_Category_ID']}" class="btn btn-default btn-md">Species List</a>
				</div>

			{*</div>*}
		</div>
		{/foreach}
	</div>

{*<div class="container">*}

  {*<div class="row">*}

	{*<div class="col-sm-6">*}


      {*<div class="card">*}

          {*<div class="face back">*}

            {*<div class="well well-sm inner">*}

				{*<img src="img/{$shape['Image']}" class="img-rounded">*}
				{*<h2>*}
					{*{$shape['Name']}*}
				{*</h2>*}
				{*<p>*}
					{*{$shape['Description']}*}

				{*</p>*}
				{*<p>*}
					{*{$shape["Shape_Category_ID"]}*}
				{*</p>*}
				{*<a href="query.php?id={$shape["Shape_Category_ID"]}">Choose Shape</a>*}
			{*</div>*}

            {*<div class="well well-sm inner">*}
				{*<img id="birdsnest" src="img/{$shape['Image']}">*}
				{*<p>*}
				{*{$shape['Description']}*}
				{*</p>*}
				{*<a href="query.php?id={$shape["Shape_Category_ID"]}>Choose Shape</a>*}
			  {*{$shape["Shape_Category_ID"]}*}
			{*</div>*}
			  {*</div>*}
          {*</div> <!-- end face back -->*}
        {*</div>	<!-- end card -->*}
	  {*</div>*}
	{*</div> <!-- end col-sm-6 -->*}

</body>
</html>