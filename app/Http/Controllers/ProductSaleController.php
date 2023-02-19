<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    public function index()
    {
        $productSales = ProductSale::with('employee','paymentMethod')->get();

        return response()->json($productSales);
    }

    public function store(Request $request)
    {
        $productSale = new ProductSale();
        $productSale->description = $request->input('description');
        $productSale->price = $request->input('price');
        $productSale->employee_id = $request->input('employee_id');
        $productSale->payment_method_id = $request->input('payment_method_id'); 
        $productSale->status = $request->input('status'); 
        $productSale->save();
    
        return response()->json($productSale, 201);
    }

    public function findByEmployeeId($employeeId)
    {
        $productSales = ProductSale::where('id', $employeeId)->first();
        $productSales->paymentMethod;
        $productSales->employee;
        
        return response()->json($productSales);
    }
}
