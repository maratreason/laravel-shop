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
		@foreach ($categories as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->code }}</td>
			<td>{{ $category->name }}</td>
			<td>
				<div class="" role="group">
					<form action="{{ route('categories.destroy', $category) }}" method="POST">
						<a href="{{ route('categories.show', $category) }}" type="button"
							class="btn btn-success">Открыть</a>
						<a href="{{ route('categories.edit', $category) }}" type="button"
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
<a class="btn btn-success" href="{{ route('categories.create') }}">Добавить категорию</a>
@endsection
