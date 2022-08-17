<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\Oprations;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ProductController extends Controller
{
    use Oprations;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->index_data(Product::class, 'Products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->create_date('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $this->store_data(Product::class, $request, 'products.index');
        $product = new Product();
        if ($request->amount1) {
            $product->amount = $request->amount1;
        }
        if ($request->amount2) {
            $product->amount = $request->amount2;
        }
        if ($request->amount3) {
            $product->amount = $request->amount3;
        }

        $product->family_type = $request->family_type;
        $product->name = $request->name;
        $product->type = $request->type;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->edit_data(Product::class, $id, 'Products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->update_data(Product::class, $request, $id, 'products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->delete_data(Product::class, $id, 'products.index');
    }
}