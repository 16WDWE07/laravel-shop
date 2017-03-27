@extends('layouts.app')

@section('title', 'Shop Page Title')

@section('content')

<h1>Shop page</h1>

<h2>All Products</h2>

@if(Auth::check())
<a href="/shop/create">Create new product</a>
@endif

@foreach($allProducts as $product)

<article>
	<h1>
		<a href="/shop/{{ $product->id }}">
			{{ $product->name }}
		</a>
	</h1>


	<p>{{ $product->description }}</p>
	<small>${{ $product->price }}</small>
</article>

@endforeach


@endsection