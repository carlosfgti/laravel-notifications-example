@extends('layouts.app')

@section('content')

<h1>Detalhes do Produto: {{ $product->name }}</h1>
<hr>
{{ $product->description }}

<hr>

@include('includes.alerts')


<h3>Deixe o seu comentário:</h3>

@guest
<p>Precisa estar logado para conseguir comentar!
    <a href="{{ route('login') }}">Fazer Login</a>
</p>
@else
<form action="{{ route('comment.store') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Assunto">
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" placeholder="Comentário" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">
                Comentar
            </button>
        </div>
    </form>
@endguest

<hr>
<h3>Comentários</h3>
@foreach ($product->comments as $comment)
    {{ $comment->title }} - {{ $comment->body }}
    <hr>
@endforeach

@endsection