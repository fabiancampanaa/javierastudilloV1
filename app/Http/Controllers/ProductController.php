<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(20);
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Producto' => 'required',
            'Costo' => 'required',
            'PrecioVenta' => 'required',
        ]);

        Product::create($request->all());
        Session::flash('message','Producto Creado Correctamente');
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('Products.modificar', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'Producto' => 'required',
            'Costo' => 'required',
            'PrecioVenta' => 'required',
        ]);
        $id = $request->id;
        $input = $request->all();
        $product = Product::findOrFail($id);
        $product->fill($input)->save();
        $product->Producto = $request->Producto;
        $product->Costo = $request->Costo;
        $product->PrecioVenta = $request->PrecioVenta;
        $product->save();
        Session::flash('message','Producto Modificado Correctamente');
        return redirect()->route('Product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('message','Producto Eliminado Correctamente');
        return redirect()->route('Product.index');
        //return view('Products.errores', compact('error'));
    }
}
