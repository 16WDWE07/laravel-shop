@extends('layouts.app')

@section('content')

<h1>{{ $product->name }}</h1>

<img src="/img/products/{{ $product->image }}" alt="{{ $product->alt_text }}">

<p>{{ $product->description }}</p>

<p>Buy this item for ${{ $product->price }}</p>

<p>This product is in the {{ $product->category->name }} category.</p>

@if(Auth::check())
<a href="/shop/{{ $product->id }}/edit">Edit this product</a>
@endif

@endsection