<x-layout>
    <h1>{{ $product->name }}</h1>
    <p><strong>Цена:</strong> {{ $product->price }}</p>
    <p><strong>Категория:</strong> {{ $product->category }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить</button>
    </form>
</x-layout>

