<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function index()
    {
        $products = $product->all();

        return view('products.index', compact('products'));
    }
}
