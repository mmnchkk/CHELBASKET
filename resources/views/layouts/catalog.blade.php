<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <div class="container-header">
            <div class="header-left">
                <img src="img/icons/Logo.svg" alt="logo" class="logo">
            </div>
            <nav class="header-menu">
                <ul>
                    <li><a class="link" href="index">Главная</a></li>
                    <li class="dropdown">
                        <a class="link" href="catalog">Каталог <img src="img/icons/arrow_down.svg" alt="arrow" width="25px"></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Футболки</a></li>
                            <li><a href="#">Майки</a></li>
                            <li><a href="balls.html">Мячи</a></li>
                            <li><a href="#">Кофты</a></li>
                            <li><a href="#">Сувениры</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="header-right">
                <a href=><img src="img/icons/search.svg" alt="search"></a>    
                <a href="basket"><img src="img/icons/basket.svg" alt="bag"></a>
                <a href="autorisation"><img src="img/icons/user.svg" alt="user"></a>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>