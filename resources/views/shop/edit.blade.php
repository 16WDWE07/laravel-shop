@extends('layouts.app')

@section('content')

<h1>Edit</h1>

<img src="/img/products/{{ $product->image }}" alt="">

{!! Form::model($product, ['url' => '/shop/'.$product->id, 'files'=>'true']) !!}

	{{ method_field('PUT') }}

	<div>
		<label for="name">Product Name: </label>
		{!! Form::text('name') !!}
	</div>

	<div>
		<label for="description">Product Description</label>
		{!! 
			Form::textarea(
				'description',
				null,
				[
					'class' 		=> 'test',
					'placeholder' 	=> 'Write something...'
				]
			)
		!!}
	</div>

	<div>
		<label for="price">Product Price: </label>
		{!! Form::number('price') !!}
	</div>

	<div>
		<label for="stock">Product Stock: </label>
		{!! Form::number('stock') !!}
	</div>

	<div>
		<label for="categories_id">Category: </label>
		{!! Form::select('categories_id', $categories) !!}
	</div>

	<div>
		{!! Form::label('image') !!}
		{!! Form::file('image') !!}
	</div>

	<div>
		{!! Form::label('alt_text', 'Alt text: ') !!}
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
