@extends('layout/master')

@section('title')
	{{ $article -> title }}
@endsection

@section('main_content')
	{{ $article -> content }}

	<form class="form-horizontal" method='POST' action='{{ url("create_comment/$article->id") }}'>

	{{ csrf_field() }}

		<div class="form-group">
		    <label class="control-label col-sm-2" for="pwd">Content</label>
		    <div class="col-sm-10"> 
		      <textarea type="text" name='content' class="form-control" id="content" placeholder="Enter content"></textarea>
		    </div>
		</div>

		<div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Submit</button>
		    </div>
		</div>
	</form>	

	<hr>

	@foreach($article->comments as $comment)
		<div class='row'>
			<div class='col-xs-2'>
				
			</div>
			<div class='col-xs-10'>
				{{ date('F d, Y - h', strtotime($comment->updated_at)) }} - 
				{{ $comment->content }}
			</div>
		</div>
	@endforeach

@endsection