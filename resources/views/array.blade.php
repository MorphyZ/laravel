<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="header-main">
            <div class="logo">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </a>
            </div>
            <ul class="menu">
                <li>Главная</li>
                <li>Массив</li>
                <li>Второй</li>
            </ul>
        </div>
    </header>
    <main>
        <h1>Заголовок</h1>
        <div class="content shop">

            @foreach ($array as $item)
            <div class="item">
                <img src="{{Vite::asset($item['path'])}}" alt="">
                <div class="name">{{$item['title']}}</div>
                <div class="price">{{$item['price']}}</div>
            </div>

            @endforeach
        </div>
    </main>
    <footer>
        <div class="copy">&copy; Шастин Данила Алексеевич, 2026</div>
    </footer>
</body>

</html>