@extends('layouts.app')

@section('content')

<h1>Latest Blog Posts</h1>

@foreach($allPosts as $post)

<article>
	<h1>
		<a href="/blog/{{ $post->id }}">
			{{ $post->title }}
		</a>
	</h1>
	<small>Written {{ Carbon::parse($post->created_at)->diffForHumans() }}</small>
	<small>Written by {{ $post->users->name }}</small>
</article>

@endforeach

@endsection