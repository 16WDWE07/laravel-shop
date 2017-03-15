@extends('master')

@section('title', 'Shop Page Title')

@section('content')

<h1>Shop page</h1>

<h2>All Products</h2>

@foreach($allProducts as $product)

<article>
	<h1>{{ $product->name }}</h1>
	<p>{{ $product->description }}</p>
	<small>${{ $product->price }}</small>
</article>

@endforeach


@endsection