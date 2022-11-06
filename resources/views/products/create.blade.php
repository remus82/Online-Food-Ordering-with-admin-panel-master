<!-- app/views/products/create.blade.php -->

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
		<li><a href="{{ URL::to('products') }}">View All products</a></li>
		<li><a href="{{ URL::to('products/create') }}">Create a product</a>
	</ul>
</nav>

<h1>Create a product</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'products')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('ingredients', 'Ingredients') }}
		{{ Form::text('ingredients', Input::old('ingredients'), array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('category', 'Category') }}
		{{ Form::text('category', Input::old('category'), array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('price', 'Price') }}
		{{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the product!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>