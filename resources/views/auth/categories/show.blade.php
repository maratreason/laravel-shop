@extends('auth.layouts.master')

@section("title", "Категория " . $category->name)

@section('content')
<div>
	<table class="table">
		<thead>
			<tr>
				<th>Поле</th>
				<th>Значение</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ID</td>
				<td>{{ $category->id }}</td>
			</tr>
			<tr>
				<td>Код</td>
				<td>{{ $category->code }}</td>
			</tr>
			<tr>
				<td>Название</td>
				<td>{{ $category->name }}</td>
			</tr>
			<tr>
				<td>Описание</td>
				<td>{{ $category->description }}</td>
			</tr>
			<tr>
				<td>Картинка</td>
				<td>
					<img src="{{ Storage::url($category->image) }}" height="240" alt="">
				</td>
			</tr>
			<tr>
				<td>Количество товаров</td>
				<td>{{ $category->products->count() }}</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection
