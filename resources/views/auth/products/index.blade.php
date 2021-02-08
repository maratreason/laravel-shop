@extends('auth.layouts.master')

@section("title", "Категории")

@section('content')
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Код</th>
			<th>Название</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->code }}</td>
			<td>{{ $product->name }}</td>
			<td>
				<div class="" role="group">
					<form action="{{ route('products.destroy', $product) }}" method="POST">
						<a href="{{ route('products.show', $product) }}" type="button"
							class="btn btn-success">Открыть</a>
						<a href="{{ route('products.edit', $product) }}" type="button"
							class="btn btn-warning">Редактировать</a>
						@csrf
						@method('DELETE')
						<input type="submit" class="btn btn-danger" value="Удалить" />
					</form>

				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a class="btn btn-success" href="{{ route('products.create') }}">Добавить Продукт</a>
@endsection
