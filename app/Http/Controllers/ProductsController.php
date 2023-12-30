<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\store;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(3);
        return view('backend.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productcat = ProductCategory::get();
        return view('backend.products.create', compact('productcat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->ProductCategoryId = $request->input('ProductCategoryId');
        $product->status = $request->input('status');
        $product->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('products', $filename, 'public');
            $product->photo = $path;
        }
        $product->price = $request->input('price');

        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        return view('backend.products.show', compact('product'));

      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $productcat = ProductCategory::get();
        return view('backend.products.edit', compact('product', 'productcat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->ProductCategoryId = $request->input('ProductCategoryId');
        $product->status = $request->input('status');
        $product->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('products', $filename, 'public');
            $product->photo = $path;
        }
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    public function Offer($id)
    {
        $product = Product::find($id);
      
        return view('backend.products.addOffer', compact('product'));
    }
    public function addOffer(Request $request,  $id)
    {
        $product = Product::findOrFail($id);
        $product->discount = $request->input('discount');
        $product->Expdate = $request->input('Expdate');
        $product->hasoffer = 1;
        if ($request->hasFile('photoslider')) {
            $filename = time() . '.' . $request->file('photoslider')->getClientOriginalName();
            $path = $request->file('photoslider')->storeAs('productsliders', $filename, 'public');
            $product->photoslider = $path;
        }
        
       $product->save();
        return redirect()->route('product.index');
    }

    public function showPro($id)
    {
        $product = Product::all();
        $store = store::where('id',$id)->first();
        //$menu=ProductCategory::all();
        $menu=ProductCategory::where('storeId',$id)->get();
        $item=ProductCategory::find($id);
        $products=Product::where('ProductCategoryId',$id)->get();
        $cate=Category::get();
    
        return view('front-end.products', compact('product','products','menu','item','store','cate'));
    }
    public function showdetails($id)
    {
        $product = Product::find($id);
        $store = store::all();
      
        $menu=ProductCategory::where('storeId',$id)->get();
        $item=ProductCategory::find($id);
        $products=Product::where('ProductCategoryId',$id)->get();
        $cate=Category::get();
    
        return view('front-end.details-products', compact('product','products','menu','item','store','cate'));
    }

//$current_timestamp = Carbon::now()->timestamp;
//$current_date_time = Carbon::now()->toDateTimeString(); // Produces something like "2019-03-11 12:25:00"
}
