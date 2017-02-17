@extends('main')
@section('page')

    <title>Blog</title>
</head>
<body>
<div class="container" style="max-width:800px">

	<div class="jumbotron" style="position:relative">
        <a href="/login" style="position:absolute;top:0;left:20px">Login</a>
        <a href="/register" style="position:absolute;top:0;left:80px">Register</a>
  		<h1 class="text-center">{{$article->title}}</h1>
	</div>

    <a href="/">Back to blog</a>
    <h6>Created: {{$article->created_at}}</h6>
    <h6>Category: {{$category}}</h6>
    <img src="{{$article->preview}}" style="float:left;margin:10px;">
    <p>{{$article->content}}</p>

    @if (count($comments))
        <h3>Comments</h3>
    @endif

    @foreach ($comments as $comment)
        <br>
        <h6>Author: {{$comment->author}}</h6>
        <h6>Created: {{$comment->created_at}}</h6>
        <p>{{$comment->content}}</p>
    @endforeach

    @if($article->comments)
        @include('addcomment')
    @endif
    <br><br><br>
</div>
</body>
</html>

@endsection