@extends('admin.admin')
@section('content')

<h3>All categories</h3>
<table class="table table-striped table-hover ">
@foreach ($categories as $category)
	<tr>
		<td>{{$category->title}}</td>
		<td>
			<form action="/admin/categories/change" method="POST">
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-default btn-sm">Change</button>
				<input type="hidden" name="id" value="{{$category->id}}">
			</form>
		</td>
		<td>
			<form action="/admin/categories/delete" method="POST">
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-default btn-sm">Delete</button>
				<input type="hidden" name="id" value="{{$category->id}}">
			</form>
		</td>
	</tr>
@endforeach
</table>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection