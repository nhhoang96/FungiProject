{include "head.tpl" title="Key" pageName="query"}
<link href="css/query.css" type=text/css rel="stylesheet" />


<form action="multiKey.php?id={$id}" method="post">
	{foreach $charList as $char}
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					{foreach $charID as $id}
						{if $char.ID == $id}
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse{$id}" ><span class="glyphicon glyphicon-th-list">
							</span> {$char.Name}
							</a>
						{/if}
					{/foreach}

				</h4>
			</div>
			{foreach $charID as $id}
			{if $char.ID == $id}
			<div id="collapse{$id}"  class="panel-collapse collapse">
				{/if}
				{/foreach}
				<div class="list-group">
					{foreach $char.options as $opt}
						<input type="checkbox" name={$char.Name} value={$opt.Opt_ID} onchange= "summary()"> {$opt.Opt_Name}<br>

					{/foreach}
				</div>

			</div>

		</div>
	{/foreach}
	<div>
		{*<input  type = "submit" name = "test" value = "Submit">*}
		<input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectSpecies">
	</div>

</form>
{if isset($success)}<h3>{$success}</h3>{/if}
{if isset($scientificName)}
	<h3>Species:</h3> <ul>
	{for $i = 1 to {$scientificName|@count}}
		<li><a href='result.php?name={$urlToBePassed[{$i}]}' class="nothing"> {$scientificName[{$i}]} </a>

		</li>
	{/for}
</ul>
{/if}

<br>

{if isset($sciName)}
	All species will display until selections are made.<br><h3>Species:</h3> <ul>

	{for $i = 1 to {$sciName|@count}}
		<li><a href='result.php?name={$url[{$i}]}'> {$sciName[{$i}]} </a>
		</li>
	{/for}
</ul>
{/if}
</html>