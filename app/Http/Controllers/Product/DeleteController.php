<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
