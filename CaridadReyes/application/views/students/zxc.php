<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Hello Bootstrap! </h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 contents">
			<p class="lead">Menu</p>
			
			<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">LG</button>
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sony<span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Tablet</a></li>
						<li><a href="#">Smartphone</a></li>
					</ul>
				</div>
				
				<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
					Search
				</button>
			</div>
		</div>
		
		
		<div class="col-md-8 col-xs-8 col-sm-8 contents">
		<?php
			echo "<p>Hello $name you are $years years old!</p>";
		?>
		<p class="text-muted">Hello Bootstrap</p>
		<p class="text-warning">Hello Bootstrap</p>
		<p class="text-success">Hello Bootstrap</p>
		<p class="text-primary">Hello Bootstrap</p>
		<p class="text-info">Hello Bootstrap</p>
		<p class="text-danger">Hello Bootstrap</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>




