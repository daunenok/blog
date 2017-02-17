@extends('admin.admin')
@section('content')

<form action="/admin/categories/update" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
  		<label class="control-label" for="title">Change category</label>
  		<input class="form-control" id="title" name="title" type="text" value = "{{$category->title}}">
  		<input type="hidden" name="id" value="{{$category->id}}">
	</div>
	<button type="submit" class="btn btn-default">Save</button>
</form>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection