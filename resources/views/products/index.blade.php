@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

<div class="row text-center">
@foreach ($products as $product)
    <div class="col-4">
        @if (auth()->check() && auth()->user()->id == $product->user_id)
        <div class="card owner">
        @else
        <div class="card">
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
    </div>
@endforeach
</div>
{!! $products->links() !!}

@endsection