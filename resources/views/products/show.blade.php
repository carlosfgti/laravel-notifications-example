@extends('layouts.app')

@section('content')

<h1>Detalhes do Produto: {{ $product->name }}</h1>
<hr>
{{ $product->description }}

@endsection