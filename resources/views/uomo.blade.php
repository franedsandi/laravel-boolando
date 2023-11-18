@extends('layout.main')

@section('content')
    <div class="container-cm">
        <div class="content">
        @foreach ($products as $product)
            @if ($product['gender'] == 'male')
                @include('partials.card')
            @endif
        @endforeach
        </div>
    </div>
@endsection

@section('title')
Uomo
@endsection

