@extends('template')

@section('title')
	Posts
@endsection

@section('content')
	
	@foreach($posts as $id => $post)

		<div class="panel panel-default">
		  <div class="panel-body">
			<small>{{ $post['date'] }}</small> <br />
			<a href="/post/{{ $id }}">
				<h2>{{ $post['title'] }}</h2>
			</a>
		  </div>
		</div>
	@endforeach

@endsection