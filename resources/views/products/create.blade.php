<x-layout>
    <h1>Добавить новый товар</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Название товара</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="price">Цена</label>
            <input type="text" id="price" name="price" required>
        </div>

        <div>
            <label for="category">Категория</label>
            <input type="text" id="category" name="category" required>
        </div>

        <div>
            <button type="submit">Сохранить</button>
        </div>
    </form>
</x-layout>
