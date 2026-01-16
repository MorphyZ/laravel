<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>ПРОДУКТЫ</h1>
    <div class="container">
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Введите название" required><br>
            <textarea name="description" placeholder="Введите описание"></textarea><br>
            <input type="text" name="price" placeholder="Введите цену"><br>
            <input type="submit" value="save">
        </form>
    </div>
</body>

</html>