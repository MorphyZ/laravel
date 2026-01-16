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
        <a href="{{route('products.create')}}">Создать продукт</a>
        @foreach ($products as $product)
        <div>
            <h3><a href="{{route ('products.show', $product -> id)}}">{{$product['title']}}</a></h3>
            <p>{{$product['description']}}</p>
            @php
            $category = $categories->firstWhere('id', $product->category_id);
            @endphp
            @if($category)
            <p>{{$category['title']}}</p>
            @else
            <p><strong>Категория:</strong> Не указана</p>
            @endif
            <form action="{{route ('products.destroy', $product -> id)}}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="УДАЛИТЬ">
            </form>
        </div>
        <hr>
        @endforeach
    </div>
</body>

</html>