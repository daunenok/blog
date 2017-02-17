@extends('admin.admin')
@section('content')

<h3>All articles</h3>
<table class="table table-striped table-hover ">
@foreach ($articles as $article)
	<tr>
		<td>{{$article->title}}</td>
		<td>
			<form action="/admin/articles/change" method="POST">
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-default btn-sm">Change</button>
				<input type="hidden" name="id" value="{{$article->id}}">
			</form>
		</td>
		<td>
			<form action="/admin/articles/delete" method="POST">
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-default btn-sm">Delete</button>
				<input type="hidden" name="id" value="{{$article->id}}">
			</form>
		</td>
	</tr>
@endforeach
</table>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection