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
                <li><a href="/">Главная</a></li>
                <li><a href="{{route('array')}}">Массив</a></li>
                <li>Второй</li>
            </ul>
        </div>
    </header>
    <main>
        <h1>Заголовок</h1>
        <div class="content">
            <img src="{{ Vite::asset('resources/images/images.jpg') }}">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum hic inventore ducimus, natus tempora minus expedita in consequatur dolorum, totam doloribus tempore labore nam repellendus explicabo cupiditate incidunt cum.
                Exercitationem nesciunt veritatis similique atque iusto recusandae, possimus nobis dolore, vitae nihil debitis ipsum, a aliquam doloremque molestiae unde voluptatibus ex? Veniam eaque minima error, necessitatibus nesciunt nemo numquam ratione.
                Quis facilis sequi velit voluptatibus sit eos rerum totam obcaecati amet quia! Perspiciatis ab rem veniam ipsa quibusdam doloremque! Saepe nostrum quos natus quisquam? Labore ea deleniti laboriosam nisi eius.
                Dicta, dignissimos sunt. Quas nostrum mollitia excepturi. Sequi repellat nobis nostrum iure deleniti. Tempora fuga eum at sunt perspiciatis officia amet facere eaque excepturi. Saepe eius perspiciatis reiciendis voluptates temporibus.
                Cum perspiciatis, molestias hic tempore inventore harum ipsum nostrum accusantium voluptatem corrupti quo dolorum dignissimos culpa tenetur nemo eum? Modi suscipit maxime rerum aut similique? Esse commodi dicta veritatis nisi.
            </p>
        </div>
    </main>
    <footer>
        <div class="copy">&copy; Шастин Данила Алексеевич, 2026</div>
    </footer>
</body>

</html>