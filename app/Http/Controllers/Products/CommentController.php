<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Models\Product;

class CommentController extends Controller
{
    

    public function store(Request $request)
    {
        $product = Product::find($request->productId);

        $comment = $product->comments()->create($request->all());

        return redirect()
                    ->route('products.show', $product->id)
                    ->with('success', 'Cadastro realizado com sucesso!');
    }
}
