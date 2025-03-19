<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">Магазин</a>
            <ul class="navbar-nav gap-3">
                <li class="nav-item "><a href="{{ route('products.index') }}" class="btn btn-outline-primary">Товары</a></li>
                <li class="nav-item"><a href="{{ route('orders.index') }}" class="btn btn-outline-primary">Заказы</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
