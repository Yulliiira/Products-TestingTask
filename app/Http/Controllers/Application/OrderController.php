<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(OrderRequest $request)
    {
        $product = Product::find($request->product_id);

        $totalPrice = $product->price;

        $order = Order::create([
            'customer_name' => $request->customer_name,
            'created_data' => $request->created_data,
            'product_id' => $request->product_id,
            'total_price' => $totalPrice,
            'status' => $request->status,
            'comment' => $request->comment
        ]);

        return redirect()->route('orders.index');
    }


    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order->load('product')
        ]);
    }

    public function updateStatus(Order $order)
    {
        $order->status = !$order->status;
        $order->save();

        return redirect()->back();
    }
}
