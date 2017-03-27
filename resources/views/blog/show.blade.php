@extends('layouts.app')

@section('content')

<img src="/img/blog/{{ $post->image }}" alt="">

<h1>{{ $post->title }}</h1>
<small>Written {{ $post->created_at }}</small>

{!! $post->content !!}



@endsection