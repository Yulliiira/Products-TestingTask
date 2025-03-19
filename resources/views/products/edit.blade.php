<x-layout>
    <h1>Редактировать товар</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Название товара</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label for="price">Цена</label>
            <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}" required>
        </div>

        <div>
            <label for="category">Категория</label>
            <input type="text" id="category" name="category" value="{{ old('category', $product->category) }}" required>
        </div>

        <div>
            <button type="submit">Обновить</button>
        </div>
    </form>
</x-layout>
