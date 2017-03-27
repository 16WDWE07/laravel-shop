@extends('layouts.app')

@section('content')

<h1>Latest Blog Posts</h1>

@foreach($allPosts as $post)

<article>
	<h1>{{ $post->title }}</h1>
	<small>Written {{ Carbon::parse($post->created_at)->diffForHumans() }}</small>
	<small>Written by {{ $post->users->name }}</small>
</article>

@endforeach

@endsection