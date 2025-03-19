@extends('components.layout')

@section('title', 'Добавить товар')

@section('content')
    <h1>Добавить товар</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Категория</label>
            <select id="category_id" name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-outline-primary">Добавить</button>
    </form>
@endsection
