@extends('components.layout')

@section('title', 'Создать заказ')

@section('content')
    <h1>Создать заказ</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_name" class="form-label">Имя клиента</label>
            <input type="text" id="customer_name" name="customer_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="created_data" class="form-label">Дата создания</label>
            <input type="date" id="created_data" name="created_data" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="product_id" class="form-label">Товар</label>
            <select id="product_id" name="product_id" class="form-control">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->price }} ₽)</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="total_price" class="form-label">Сумма заказа</label>
            <input type="hidden" id="total_price" name="total_price" value="{{ old('total_price') }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Статус</label>
            <select id="status" name="status" class="form-control">
                <option value="0">В обработке</option>
                <option value="1">Завершен</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Комментарий (необязательно)</label>
            <textarea id="comment" name="comment" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary">Оформить заказ</button>
    </form>
@endsection
