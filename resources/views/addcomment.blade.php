<br>
<h3>Add comment</h3>
<form action="/comments/add" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label class="control-label" for="author">Author</label>
        <input class="form-control" id="author" name="author" type="text"  style="width:200px;"><br>

        <label class="control-label" for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="5" style="width:400px;"></textarea>
        <input type="hidden" name="article" value="{{$article->id}}">
    </div>
    <button type="submit" class="btn btn-default">Add</button>
</form>