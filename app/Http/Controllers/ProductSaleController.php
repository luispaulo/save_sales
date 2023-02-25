<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    public function index()
    {
        $productSales = ProductSale::with('user','paymentMethod')->get();

        return response()->json($productSales);
    }

    public function store(Request $request)
    {
        $productSale = new ProductSale();
        $productSale->description = $request->input('description');
        $productSale->price = $request->input('price');
        $productSale->user_id = $request->input('user_id');
        $productSale->payment_method_id = $request->input('payment_method_id'); 
        $productSale->status = $request->input('status'); 
        $productSale->save();
    
        return response()->json($productSale, 201);
    }

    public function findByUserId($user_id)
    {
        $productSales = ProductSale::where('user_id', $user_id)->first();
        $productSales->paymentMethod;
        $productSales->user;
        
        return response()->json($productSales);
    }
}
