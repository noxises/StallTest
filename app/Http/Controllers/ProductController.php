<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sortType = $_GET['sort'] ?? 'price';
        $dir = $_GET['dir'] ?? "desc";
        $page['title'] = "Product list";
        return view("Product.list")->with('sortType', $sortType)->with('dir', $dir)->with('page', $page)->with('products', Product::orderby($sortType, $dir)->get());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product =  Product::find($id);
        $page['title'] = $product->title;
        return view("Product.product")->with('product', $product)->with('page',$page);
    }

}
