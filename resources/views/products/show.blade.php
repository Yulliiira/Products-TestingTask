@extends('components.layout')

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p><strong>Цена:</strong> {{ $product->price }} ₽</p>
    <p><strong>Категория:</strong> {{ $product->category->name ?? 'Нет категории' }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Назад</a>
@endsection
