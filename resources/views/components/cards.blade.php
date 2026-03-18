@props(['products' => []]) {{-- пропс с дефолтным значением --}}

@foreach($products as $product)
<div class="card">
    <div class="rating">
        <span>4.5</span>
        <img class="star" src="/img/icons/star.svg">
    </div>

    <div class="edit">
        <img src="/img/icons/edit.svg">
    </div>

    <img class="card-image" src="{{ asset($product->path_img) }}">

    <div class="description">
        <p class="title">{{ $product->name }}</p>
        <p class="price">{{ $product->price }} ₽</p>
    </div>

    <div class="card-button
        {{ $product->stock_quantity > 0 ? '' : 'card-button-none' }}">
        {{ $product->stock_quantity > 0 ? 'В корзину' : 'Нет в наличии' }}
    </div>
</div>
@endforeach