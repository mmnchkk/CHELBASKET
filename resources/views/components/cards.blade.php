<div class="card">
    <div class="rating">
        <span>{{ $rating }}</span>
        <img class="star" src="/img/icons/star.svg">
    </div>

    <div class="edit">
        <img src="img/icons/edit.svg">
    </div>
    <img class="card-image" src="{{ $image }}">

    <div class="description">
        <p class="title">{{ $title }}</p>
        <p class="price">{{ $price }}₽</p>
    </div>

    <div class="card-button">В корзину</div>
</div>