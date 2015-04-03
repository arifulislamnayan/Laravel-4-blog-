<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>

	<header>
    <div class="container">
    	<div class="pull-right">


    	</div>

    	<h1> <a href="#"> This is a simple blog post </a></h1>
    	<p class="lead"> A demo blog with laravel4</p>
    </div>
	

	</header>




	<div class="main">
		<div class="container">
			@yield('content')


		</div>
		
		
	</div>
	
</body>
</html>
