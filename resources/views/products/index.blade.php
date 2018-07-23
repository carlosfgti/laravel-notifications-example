@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

<div class="row">
@foreach ($products as $product)
    @if (auth()->check() && auth()->user()->id == $product->user_id)
    <div class="col-4 owner card text-center">
    @else
    <div class="col-4 card text-center">
    @endif
        <div class="card-body">
                <div class="card-title">
                    {{ $product->name }}
                </div>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
                    Detalhes
                </a>
        </div>
    </div>
@endforeach
</div>
{!! $products->links() !!}

@endsection