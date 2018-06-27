@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

@foreach ($products as $product)
    {{ $product->name }}
    <hr>
@endforeach

@endsection