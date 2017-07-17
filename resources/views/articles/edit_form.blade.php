@extends('layout/master')

@section('title')
	{{ $article -> title }}
@endsection




@section('main_content')
	<form class="form-horizontal" method='POST' action='{{ url("/edit/$article->id") }}'>

	{{ csrf_field() }}

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">Title:</label>
		    <div class="col-sm-10">
		      <input type="text" name='title' class="form-control" id="title" value="{{ $article->title }}">

		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="pwd">Content</label>
		    <div class="col-sm-10"> 
		      <textarea type="text" name='content' class="form-control" id="content" placeholder="Enter content">{{ $article->content }}</textarea>
		    </div>
		</div>

		<div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Submit</button>
		    </div>
		</div>
	</form>

@endsection