@extends('layouts.app')

@section('content')

<h1>Detalhes do Produto: {{ $product->name }}</h1>
<hr>
{{ $product->description }}

@include('products.partials.comments', ['comments' => $product->comments])

@endsection