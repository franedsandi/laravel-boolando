@php
    $main_menu = config('Menues.main_menu');
    $user_menu = config('Menues.user_menu');
@endphp

<header>
    <div class="container">
        <ul>
            @foreach ($main_menu as $item)
                <li>
                    <a class="{{ Route::currentRouteName() === $item["name"] ? 'active' : '' }}" href="{{ route($item["name"]) }}">{{$item["text"]}}</a>
                </li>
            @endforeach
            {{-- <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ Route::currentRouteName() === 'uomo' ? 'active' : '' }}" href="{{ route('uomo') }}">Uomo</a></li>
            <li><a class="{{ Route::currentRouteName() === 'donna' ? 'active' : '' }}" href="{{ route('donna') }}">Donna</a></li>
            <li><a class="{{ Route::currentRouteName() === 'bambini' ? 'active' : '' }}" href="{{ route('bambini') }}">Bambini</a></li> --}}
        </ul>
      <div class="logo">
        <img src="/img/boolean-logo.png" alt="Logo-boolando">
      </div>
      <div class="fontawesome">
        <ul>
            @foreach ($user_menu as $item)
                <li>
                    <a href="$item["name"]">{!! $item['text'] !!}</a>
                </li>
            @endforeach
        </ul>
      </div>
    </div>
</header>
