@extends('components.layout')

@section('title', 'Товары')

@section('content')
    <h1>Список товаров</h1>
    <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Добавить товар</a>

    <table class="table mt-2">
        <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Категория</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} ₽</td>
                    <td>{{ $product->category->name ?? 'Нет категории' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary">Просмотр</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary">Редактировать</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-primary">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
