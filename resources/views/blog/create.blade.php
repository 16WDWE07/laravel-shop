@extends('layouts.app')

@section('content')

<h1>Write a new Blog Post</h1>

{!! Form::open(['url'=>'blog', 'files'=>'true']) !!}

<div>
	{!! Form::label('title', 'Title: ') !!}
	{!! Form::text('title', null, ['placeholder'=>'Lego Batman review']) !!}

	@if($errors->first('title'))
		<p class="alert-danger">{{ $errors->first('title') }}</p>
	@endif
</div>


<div>
	{!! Form::label('content', 'Your blog post: ') !!}
	{!! Form::textarea('content') !!}

	@if($errors->first('content'))
		<p class="alert-danger">{{ $errors->first('content') }}</p>
	@endif
</div>

<div>
	{!! Form::label('image', 'Featured image: ') !!}
	{!! Form::file('image') !!}

	@if($errors->first('image'))
		<p class="alert-danger">{{ $errors->first('image') }}</p>
	@endif
</div>

{!! Form::submit('Submit your post!') !!}

{!! Form::close() !!}

@endsection

@section('scripts')

<script src="http://cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
// NEED A CALLBACK!
	CKEDITOR.replace( 'content' );
</script>

@endsection