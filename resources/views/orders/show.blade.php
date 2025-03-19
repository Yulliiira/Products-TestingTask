@extends('components.layout')

@section('title', 'Детали заказа')

@section('content')
    <h1>Заказ №{{ $order->id }}</h1>
    <p><strong>Клиент:</strong> {{ $order->customer_name }}</p>
    <p><strong>Дата заказа:</strong> {{ $order->created_data }}</p>
    <div class="mb-1" style="width: 30vw; display: flex; justify-content: space-between; align-items: baseline;">
        <p><strong>Статус:</strong>
            {{ $order->status ? 'Завершен' : 'В обработке' }}
        </p>
        @csrf
        <form action="{{ route('orders.updateStatus', $order) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary">
                {{ $order->status ? 'Сделать в обработке' : 'Сделать завершенным' }}
            </button>
        </form>
    </div>
    <p><strong>Товар:</strong> {{ $order->product->name }}</p>
    <p><strong>Итоговая сумма:</strong> {{ $order->total_price }} ₽</p>

    <a href="{{ route('orders.index') }}" class="btn btn-outline-primary">Назад</a>
@endsection
