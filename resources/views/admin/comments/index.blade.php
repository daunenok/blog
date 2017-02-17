@extends('admin.admin')
@section('content')

<h3>All comments</h3>
@foreach ($comments as $comment)
	<h6>Article: {{$comment->article}}</h6>
	<h6>Created: {{$comment->created_at}}</h6>
	<h6>Author: {{$comment->author}}</h6>
	<p>{{$comment->content}}</p>
	
	<form action="/admin/comments/change" method="POST" style="display:inline">
		{!! csrf_field() !!}
		<button type="submit" class="btn btn-default btn-sm">Change</button>
		<input type="hidden" name="id" value="{{$comment->id}}">
	</form> &nbsp;&nbsp;&nbsp;
	<form action="/admin/comments/delete" method="POST" style="display:inline">
		{!! csrf_field() !!}
		<button type="submit" class="btn btn-default btn-sm">Delete</button>
		<input type="hidden" name="id" value="{{$comment->id}}">
	</form>
	<hr>
@endforeach

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection