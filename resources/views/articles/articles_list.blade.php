@extends('..layout/master')


@section ('title')
	This is my title
@endsection


@section('main_content')

<h3>List of Articles</h3>

<ul>
	@foreach($articles as $article)
		<a href='{{ url("/home/$article->id") }}'><li>{{ $article-> title }}</li></a>


		<div>
			<a href='{{ url("/edit/$article->id") }}'>
				<button class='btn btn-primary'>
					Edit
				</button>
			</a>
			<a href='{{ url("/home/delete/$article->id") }}'>
				<button class='btn btn-danger'>
					Delete
				</button>
			</a>
		</div>
	@endforeach
</ul>

@endsection


@section('footer')
	All Rights Reserved.
@endsection