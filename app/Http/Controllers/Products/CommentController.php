<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Notifications\PostCommented;
use App\Http\Requests\Products\StoreCommentFormRequest;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(StoreCommentFormRequest $request)
    {
        $user = $request->user();

        $comment = $user->comments()->create($request->all());

        $user = $comment->product->user;
        $user->notify(new PostCommented($comment));

        return redirect()
                    ->route('products.show', $comment->product_id)
                    ->withSuccess('Cadastro realizado com sucesso!');
    }
}
