@extends('auth.layouts.master')

@section("title", "Заказы")

@section('content')
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Имя</th>
			<th>Телефон</th>
			<th>Когда отправлен</th>
			<th>Сумма</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($orders as $order)
		<tr>
			<td>{{ $order->id }}</td>
			<td>{{ $order->name }}</td>
			<td>{{ $order->phone }}</td>
			<td>{{ $order->created_at->format('H:i (d/m/Y)') }}</td>
			<td>{{ $order->getFullPrice() }} руб.</td>
			<td>
				<div class="btn-group" role="group">
					<a href="" type="button" class="btn btn-success">Открыть</a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
