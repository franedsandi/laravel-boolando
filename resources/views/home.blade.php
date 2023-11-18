@extends('layout.main')

@section('content')
    <div class="container-cm">
        <div class="content">
        @foreach ($products as $product)
            @include('partials.card')
        @endforeach
        </div>
    </div>
@endsection

@section('title')
Home
@endsection

