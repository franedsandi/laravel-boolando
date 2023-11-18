@php
    $footer_menu = config('Menues.footer_menu');
    $social_menu = config('Menues.social_menu');
@endphp

<div class="footer">
    <div class="container">
      <div class="legal">
        <span class="compani">
            Boleando S.R.L.
        </span>
        <ul>
            @foreach ($footer_menu as $item)
                <li>
                    <a class="{{ Route::currentRouteName() === $item["name"] ? 'active' : '' }}" href="{{ route($item["name"]) }}">{{$item["text"]}}</a>
                </li>
            @endforeach
        </ul>
      </div>
      <div class="social">
        <span>
          Trovaci anche su
        </span>
        <ul>
            @foreach ($social_menu as $item)
                <li>
                    <a href="$item["name"]">{!! $item['text'] !!}</a>
                </li>
            @endforeach
        </ul>
      </div>
    </div>
</div>
