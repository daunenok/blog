@extends('admin.admin')
@section('content')

<form action="/admin/categories/store" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
  		<label class="control-label" for="title">Create category</label>
  		<input class="form-control" id="title" name="title" type="text">
	</div>
	<button type="submit" class="btn btn-default">Save</button>
</form>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection