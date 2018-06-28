@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

@foreach ($products as $product)
    {{ $product->name }} - {{ $product->description }} |
    <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
    <hr>
@endforeach

@endsection