@extends('admin.admin')
@section('content')

<h3>Create article</h3>
<form action="/admin/articles/store" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<div class="form-group">
  		<label class="control-label" for="title">Title</label>
  		<input class="form-control" id="title" name="title" type="text"><br>

  		<label class="control-label" for="content">Content</label>
  		<textarea class="form-control" name="content" id="content" rows="10"></textarea><br>

		<label class="control-label" for="preview">Preview</label>
  		<input id="preview" name="preview" type="file">
  		<br>

  		<label class="control-label" for="category">Category</label>
  		<select class="form-control" name="category" id="category">
  			@foreach ($categories as $category)
				<option value="{{$category->id}}">
					{{$category->title}}
				</option>
  			@endforeach
  		</select><br>

  		<div class="checkbox">
          <label>
            <input id="public" name="public" type="checkbox" checked>Public
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input id="comments" name="comments" type="checkbox" checked>Comments enable
          </label>
        </div>

        <br>
	</div>
	<button type="submit" class="btn btn-default">Save</button>
</form>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection