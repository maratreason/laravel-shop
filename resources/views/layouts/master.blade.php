<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/starter-template.css">
	<title>@yield("title")</title>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{ route('index') }}">Все товары</a></li>
					<li><a href="{{ route('categories') }}">Категории</a>
					</li>
					<li><a href="{{ route('basket') }}">В корзину</a></li>
					<li><a href="{{ route('index') }}">Сбросить проект в начальное состояние</a></li>
					<li><a href="{{ route('index') }}">en</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">₽<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
							<li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
							<li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="/login">Войти</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="starter-template">
			@if(session()->has("success"))
			<p class="alert alert-success">{{ session()->get("success") }}</p>
			@elseif(session()->has("warning"))
			<p class="alert alert-warning">{{ session()->get("warning") }}</p>
			@endif
			@yield("content")
		</div>
	</div>

</body>

</html>