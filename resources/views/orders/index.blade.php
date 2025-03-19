@extends('components.layout')

@section('title', 'Список заказов')

@section('content')
    <h1>Список заказов</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-outline-primary">Добавить заказ</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Клиент</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Сумма</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->created_data }}</td>
                    <td>{{ $order->status ? 'Завершен' : 'В обработке' }}</td>
                    <td>{{ $order->total_price }} ₽</td>
                    <td>
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-outline-primary">Просмотр</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
