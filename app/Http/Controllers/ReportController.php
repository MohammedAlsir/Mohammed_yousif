<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function product()
    {
        $small = Order::where('family_type', 1)->count();
        $medium = Order::where('family_type', 2)->count();
        $larg = Order::where('family_type', 3)->count();

        return view('reports.product', compact('small', 'medium', 'larg'));
    }

    public function index()
    {
        $products = Product::all();
        $index = 1;
        return view('reports.index', compact('products', 'index'));
    }
}