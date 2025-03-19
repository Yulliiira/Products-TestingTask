<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() //список товаров
    {
        $products = Product::all();
        
        return view('products.index', compact('products'));
    }

    public function create() // форма добавления
    {
        return view('products.create');
    }

    public function store(ProductRequest $request) //сохранение нового товара
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('product', ['product' => $product->id]);

    }

    public function show(Product $product) // детальная страница
    {
        return view('products.show', [
            'product' => Product::findOrFail($product)
        ]);
    }

    public function edit($id) // форма редактирования
    {
        return view('products.edit');
    }

    public function update(ProductRequest $request, Product $product) // обновление товара
    {
        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('product', ['product' => $product->id]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products');
    }
}
