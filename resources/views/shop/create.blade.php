@extends('layouts.app')

@section('content')

<h1>Create a new product</h1>

{!! Form::open(['url' => '/shop', 'files'=>'true']) !!}

	<div>
		<label for="name">Product Name: </label>
		{!! Form::text('name') !!}
	</div>

	<div>
		<label for="description">Product Description</label>
		{!! 
			Form::textarea(
				'description',
				'',
				[
					'class' 		=> 'test',
					'placeholder' 	=> 'Write something...'
				]
			)
		!!}
	</div>

	<div>
		<label for="name">Product Price: </label>
		{!! Form::number('price') !!}
	</div>

	<div>
		<label for="name">Product Stock: </label>
		{!! Form::number('stock') !!}
	</div>

	<div>
		<label for="categories_id">Category</label>
		{!! Form::select('categories_id', $allCategories) !!}
	</div>

	<div>
		<label for="image">Image: </label>
		{!! Form::file('image') !!}
	</div>

	<div>
		<label for="alt_text">Alt text: </label>
		{!! Form::text('alt_text') !!}
	</div>



	<input type="submit" value="Submit new product!">

</form>

<ul>
@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
@endforeach
</ul>


@endsection