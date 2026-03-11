@push('vite')
    @vite('resources/css/new-collection.css')
    @vite('resources/css/cards.css')
    @vite('resources/css/overlay.css')
@endpush

<x-main-layout>
    <x-slot:title>
        Челбаскет
    </x-slot:title>

    <div class="main">
        <div class="width">
            <nav class="nav-menu">
            <ul class="nav-items">
                <li class="nav-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="nav-item">/</li>
                <li class="nav-item">Каталог</li>
            </ul>
            </nav>
            <h1 class="title-catalog">Новая коллекция</h1>
                <div class="filters">
                        <button class="filter-open-btn">
                        Все фильтры
                        <img src="img/icons/icons_filter.svg" alt="фильтры" class="filter-open-btn-img"/>
                        </button>
                    <div class="filter-dropdown">
                        <div class="filter-btn">
                            ПО НАИБОЛЬШЕЙ ЦЕНЕ
                            <img src="img/icons/arrow_down.svg" alt="arrow">
                        </div>

                        <ul class="filter-menu">
                            <li><a href="#">ПО НАИБОЛЬШЕЙ ЦЕНЕ</a></li>
                            <li><a href="#">ПО НАИМЕНЬШЕЙ ЦЕНЕ</a></li>
                            <li><a href="#">ПО РЕЙТИНГУ</a></li>
                            <li><a href="#">ПО НОВИЗНЕ</a></li>
                        </ul>
                    </div>
                </div>
        
       <div class="more-cards">
         <div class="cards">
            <a href="card.html" class="card-link">
                <div class="card">
                    <div class="rating">
                        <span>5</span><img class="star" src="img/icons/star.svg" alt="">
                    </div>
                    <div class="edit">
                        <img src="img/icons/edit.svg" alt="edit">
                    </div>
                    <img class="card-image" src="img/ball_icanplay.svg" alt="Товар" />
                    <div class="description">
                        <p class="title">Футболка с логотипом Челбаскета</p>
                        <p class="price">1990₽</p>
                    </div>
                    <div class="card-button">В корзину</div>
                </div>
            </a>
            @for ($i = 0; $i < 7; $i++)
                <a href="card" class="card-link"><x-cards rating="5" image="/img/ball_icanplay.svg" title="Футболка с логотипом Челбаскета" price="1990" /></a>
            @endfor
            @for ($i = 0; $i < 7; $i++)
                <a href="card" class="card-link"><x-card-none image="/img/ball_icanplay.svg" title="Футболка с логотипом Челбаскета" price="1990"/></a>
            @endfor
            <a href="card" class="card-link"><x-cards rating="5" image="/img/ball_icanplay.svg" title="Футболка с логотипом Челбаскета" price="1990" /></a>
         </div>
       </div>
       <div class="btn-down">
            <button class="load-more-btn">загрузить ещё</button>
       </div>
    </div>
    <x-filter></x-filter>
</x-main-layout>