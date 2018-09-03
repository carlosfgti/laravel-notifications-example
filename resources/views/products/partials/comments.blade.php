<hr>

@include('includes.alerts')


<h3>Deixe o seu comentário:</h3>

@guest
<p>Precisa estar logado para conseguir comentar!
    <a href="{{ route('login') }}">Fazer Login</a>
</p>
@else
<notification :product_id="'{{ $product->id }}'"></notification>
@endguest

<hr>

<div id="comments">
        <h3>Comentários</h3>
        @foreach ($comments as $comment)
            <div id="comment-{{ $comment->id }}">
                {{ $comment->title }} - {{ $comment->body }}
            </div>
        @endforeach
</div>