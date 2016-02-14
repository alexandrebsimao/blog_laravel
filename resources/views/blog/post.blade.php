@extends('template')

@section('title')
	Post - {{ $post['title'] }}
@endsection

@section('content')

	<h1>{{ $post['title'] }}</h1>
	
	<small>{{ $post['date'] }}</small> <br /><br />

	{{ $post['content'] }}

@endsection