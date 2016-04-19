{include "head.tpl" title={$sciName}}
<!--Fungi Team 2015-->
<link rel="stylesheet" type="text/css" href="result.css" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script>
		  $(document).ready(function(){
			$('.carousel').carousel();
		  });
</script>
<body>
	<div class="container">
		<div class="page-header">
			<h1 id="species-name">{$sciName}</h1>
		</div>
		<div class="row">
			<div class="col-lg-7">
					<p><strong>Common name:</strong> {$commonName}</p>
					<p><strong>Name Derivation:</strong> {$nameDerivation}</p>
					<p><strong>Phylum:</strong> {$phylum}</p>
					<p><strong>Order:</strong> {$spOrder}</p>
					<p><strong>Family:</strong> {$family}</p>
					<p><strong>Comment:</strong> {$comment}</p>
					<p><strong>Wood substrate:</strong> {$woodSubstrate}</p>
					<p><strong>Dimensions:</strong> {$dimensions}</p>

				<div class="hs">
					<div class="showcase">
						<ul style="width:1240px;">
							<tr class="row">
								{foreach $photos as $pic}
									<div class = "imageBox">
										<img src="img/{$pic['Photo_Name']}" width="200" height="197"/><br>
										{$pic['Caption']}
									</div>
								{/foreach}
							</tr>
						</ul>
					</div>
			</div>


				{*<div class="left-arrow">*}
					{*<a href="#prev">*}
						{*<img src="images/scroller_left.gif"*}
							 {*name="scroller_left"*}
							 {*width="22"*}
							 {*height="197"*}
							 {*border="0">*}
					{*</a>*}
				{*</div>*}

				{*<div class="right-arrow">*}
					{*<a href="#next">*}
						{*<img src="images/scroller_right.gif"*}
							 {*name="scroller_right"*}
							 {*width="22"*}
							 {*height="197"*}
							 {*border="0">*}
					{*</a>*}
				{*</div>*}
				<!--
				<img src="{$photoName}" alt="Chania">
				<h5>{$caption}</h5>
				<a href="{$photoName}" data-lightbox="{$photoName}" data-title="{$caption}"><img src="{$photoName}" class="thumbnail" alt="{$photoName}"></a> -->

				{*<img src="{$photoName}" alt="Chania">*}
				{*<h5>{$caption}</h5> -->*}
				{*<a href="{$photoName}" data-lightbox="{$photoName}" data-title="{$caption}"><img src="img/{$photoName}" class="thumbnail" alt="Chania"></a>*}
				{**}
			</div>
		</div> <!-- end row -->
	</div>
		
</body>