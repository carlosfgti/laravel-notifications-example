@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

<div class="row">
@foreach ($products as $product)
    <div class="col-4 text-center">
        {{ $product->name }} |
        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
    </div>
@endforeach
</div>
{!! $products->links() !!}

@endsection