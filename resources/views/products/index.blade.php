<x-layout>
    <h1>Все товары</h1>

    <a href="{{ route('products.index') }}">Товары</a><br>
    <a href="{{ route('products.create') }}">Добавить новый товар</a>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
