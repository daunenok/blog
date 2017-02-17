@extends('main')
@section('page')

		<link rel="stylesheet" href="{{asset('css/admin.css')}}">
		<title>Dashboard</title>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default">
  				<div class="panel-heading"><h1>Dashboard</h1></div>
  				<div class="panel-body">
					@yield('content')
					<a href="/">BLOG</a>
  				</div>
			</div>
		</div>
	</body>
</html>

@endsection