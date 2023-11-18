<div class="card">
    <div class="image">
        <img
        src="img/{{$product['frontImage']}}"
        alt="{{$product['name']}}">
        <img
        src="img/{{$product['backImage']}}"
        alt="{{$product['name']}}" class="upper">
        <div class="like {{ $product['isInFavorites'] ? ' active'  : '' }}">
            <span class="heart" >&hearts;</span>
        </div>
        <div class="caracteristicas">
            @foreach ($product['badges'] as $badge)
                <span class="{{$badge["type"]}}">{{$badge["value"]}}</span>
            @endforeach
        </div>
    </div>
    <div class="description">
        <span class="tag brand">{{$product['brand']}}</span>
        <span class="tag name">{{$product['name']}}</span>
        <div class="tag price">
            @foreach ($product['badges'] as $badge)
                @if ($badge["type"] === "discount")
                    <span class="red">{{ number_format($product['price'] - ($badge["discount"] * $product['price'] / 100), 2) }} &euro;</span>
                @endif
            @endforeach
            <span class="fullprice">
                {{$product['price']}} &euro;
            </span>
        </div>
    </div>
</div>
