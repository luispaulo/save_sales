<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $infoCompany = Company::all();

        return response()->json($infoCompany);
    }

    public function store(Request $request)
    {
        $productSale = new Company();
        $productSale->name = $request->input('name');
        $productSale->email = $request->input('email');
        $productSale->cpf = $request->input('cpf'); 
        $productSale->cnpj = $request->input('cnpj'); 
        $productSale->status = $request->input('status'); 
        $productSale->start_date = $request->input('start_date'); 
        $productSale->end_date = $request->input('end_date'); 
        $productSale->theme_color = $request->input('theme_color'); 
        $productSale->contact = $request->input('contact'); 
        $productSale->save();
    
        return response()->json($productSale, 201);
    }

    public function findCompanyById($company_id)
    {
        $company = Company::where('id', $company_id)->first();

        return response()->json($company);
    }

    public function findUserByCompany($company_id)
    {
        $company = Company::where('id', $company_id)->first();

        return [
            'company' => [$company],
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
