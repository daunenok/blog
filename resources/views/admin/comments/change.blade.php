@extends('admin.admin')
@section('content')

<h6>Article: {{$comment->article}}</h6>
<h6>Created: {{$comment->created_at}}</h6>
<h6>Author: {{$comment->author}}</h6>

<form action="/admin/comments/update" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
  		<label class="control-label" for="content">Comment</label>
  		<textarea class="form-control" name="content" id="content" rows="5">{{$comment->content}}</textarea>
        <input type="hidden" name="id" value="{{$comment->id}}">
	</div>
	<button type="submit" class="btn btn-default">Save</button>
</form>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection