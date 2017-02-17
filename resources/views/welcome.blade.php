@extends('main')
@section('page')

    <title>Blog</title>
</head>
<body>
<div class="container" style="max-width:800px">

	<div class="jumbotron" style="position:relative">
        <a href="/login" style="position:absolute;top:0;left:20px">Login</a>
        <a href="/register" style="position:absolute;top:0;left:80px">Register</a>
  		<h1 class="text-center">Cute Blog</h1>
	</div>
    
    @foreach ($articles as $article)
    	<div class="panel panel-default">
  			<div class="panel-body">
    			<h2><a href="/show/{{$article->id}}">{{$article->title}}</a></h2>
    			<h6>Created: {{$article->created_at}}</h6>
    			<p>{{str_limit($article->content, 200)}}</p>
  			</div>
		</div>
    @endforeach

</div>
</body>
</html>

@endsection