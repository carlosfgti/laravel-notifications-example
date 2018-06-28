<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $user = User::find(1);

        $comment = $user->comments()->create($request->all());

        return redirect()
                    ->route('products.show', $comment->product_id)
                    ->with('success', 'Cadastro realizado com sucesso!');
    }
}
