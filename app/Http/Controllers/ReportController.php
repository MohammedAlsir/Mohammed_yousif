<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function product()
    {
        $small = Product::where('family_type', 1)->count();
        $medium = Product::where('family_type', 2)->count();
        $larg = Product::where('family_type', 3)->count();

        return view('reports.product', compact('small', 'medium', 'larg'));
    }

    public function index()
    {
        $products = Product::all();
        $index = 1;
        return view('reports.index', compact('products', 'index'));
    }
}