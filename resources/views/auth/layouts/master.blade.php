<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Админка: @yield("title")</title>

	<!-- Scripts -->
	<script src="/js/app.js" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/admin.css" rel="stylesheet">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<a class="navbar-brand" href="{{ route('index') }}">
					Вернуться на сайт
				</a>

				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="">
							<a class="" href="{{ route('categories.index') }}">Категории</a>
						</li>
						<li class="">
							<a class="" href="{{ route('products.index') }}">Товары</a>
						</li>
						<li class="">
							<a class="" href="{{ route('home') }}">Заказы</a>
						</li>
					</ul>

					@guest
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">Войти</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
						</li>
					</ul>
					@endguest

					@auth
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('logout') }}">Выйти</a>
						</li>
					</ul>
					@endguest
				</div>
			</div>
		</nav>

		<div class="py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">@yield("title")</div>
							<div class="card-body">
								@yield("content")
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
