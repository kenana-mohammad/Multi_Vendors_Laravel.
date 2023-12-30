<?php

namespace App\Http\Controllers;

use App\Models\product_category;
use App\Models\store;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     function __construct()
     {
      
         $this->middleware('permission:ProductCategory Mangement|create ProductCategory|Edit ProductCategory|delete ProductCategory|show ProductCategory', ['only' => ['index']]);
          $this->middleware('permission:create ProductCategory', ['only' => ['create','store']]);
          $this->middleware('permission:Edit ProductCategory', ['only' => ['edit','update']]);
          $this->middleware('permission:delete ProductCategory', ['only' => ['destroy']]);
     }
    public function index()
    {
        //

        $productCategory=Product_Category::paginate(3);
      
        return view('backend.productCategory.index',compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $store=store::get();
        return view('backend.productCategory.create',compact('store'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
     
        $productCategory=Product_Category::create($input);
        return redirect()->route('ProductCat.index')
                                       ->with('success','category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $productCategory=Product_Category::find($id);
        return view('backend.productCategory.show',compact('productCategory'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productCategory=Product_Category::find($id);
        $store=store::get();
        return view('backend.productCategory.edit',compact('productCategory','store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $productCategory = Product_Category::find($id);
        $productCategory->update($input);
        return redirect()->route('ProductCat.index')
            ->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Product_Category::find($id)->delete();
        return redirect()->route('ProductCat.index')
                         ->with('success','category deleted successfully');
    }
     public function slider($id){
      $id=Product_Category::find($id);
     return view('backend.productCategory.addslider',compact('id'));
     }
     public function addslider(Request $request,$id){
        $productCat= Product_Category::find($id);
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('productcat', $filename, 'public');
            $productCat->photo = $path;
        }
        $productCat->save();
        return redirect()->route('ProductCat.index');
  
     }
}
