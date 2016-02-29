{include "head.tpl" title={$sciName} active="app"} 
<!--Fungi Team 2015-->
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
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4">
				<!--
				<img src="{$photoName}" alt="Chania">
				<h5>{$caption}</h5> -->
				<a href="{$photoName}" data-lightbox="{$photoName}" data-title="{$caption}"><img src="{$photoName}" class="thumbnail" alt="Chania"></a>
				
			</div>
		</div> <!-- end row -->
	</div>
		
</body>