<!-- app/views/products/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('products') }}">Product Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('products') }}">View All Products</a></li>
		<li><a href="{{ URL::to('products/create') }}">Create a Product</a>
	</ul>
</nav>

<h1>Showing {{ $product->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $product->name }}</h2>
		<p>
			<strong>Description:</strong> {{ $product->description }}<br>
			<strong>Ingredients:</strong> {{ $product->ingredients }}<br>
			
		</p>
	</div>

</div>
</body>
</html>