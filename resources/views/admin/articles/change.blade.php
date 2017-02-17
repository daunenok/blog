@extends('admin.admin')
@section('content')

<form action="/admin/articles/update" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<div class="form-group">
  		<label class="control-label" for="title">Title</label>
  		<input class="form-control" id="title" name="title" type="text" value="{{$article->title}}"><br>

  		<label class="control-label" for="content">Content</label>
  		<textarea class="form-control" name="content" id="content" rows="10">{{$article->content}}</textarea><br>

		<label class="control-label" for="preview">Preview</label>
  		<input id="preview" name="preview" type="file">
  		<br>

  		<label class="control-label" for="category">Category</label>
  		<select class="form-control" name="category" id="category">
  			<?php 
  				foreach ($categories as $category):
	  				$selected = "";
	  				if ($category->id == $article->category) 
	  					$selected = "selected";
	  		?>
			<option value="{{$category->id}}" {{$selected}}>
				{{$category->title}}
			</option>
  			<?php endforeach; ?>
  		</select><br>

  		<div class="checkbox">
          <label>
          	<?php
          		$checked = "";
          		if ($article->public) 
          			$checked = "checked";
          	?>
            <input id="public" name="public" type="checkbox" {{$checked}}>Public
          </label>
        </div>

        <div class="checkbox">
          <label>
          	<?php
          		$checked = "";
          		if ($article->comments) 
          			$checked = "checked";
          	?>
            <input id="comments" name="comments" type="checkbox" {{$checked}}>Comments enable
          </label>
        </div>
        <input type="hidden" name="id" value="{{$article->id}}">
        <br>
	</div>
	<button type="submit" class="btn btn-default">Save</button>
</form>

<br>
<a href="/admin">DASHBOARD</a>
<br>

@endsection