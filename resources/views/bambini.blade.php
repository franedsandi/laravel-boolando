@extends('layout.main')

@section('content')
    <div class="container-cm">
        <div class="content">
        @foreach ($products as $product)
            @if ($product['gender'] == 'bambini')
                @include('partials.card')
            @endif
        @endforeach
        </div>
    </div>
@endsection

@section('title')
Bambini
@endsection


