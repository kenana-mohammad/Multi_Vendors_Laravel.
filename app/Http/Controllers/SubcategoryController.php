<?php

namespace App\Http\Controllers;
use App\Models\subcategory;
use Illuminate\Http\Request;

use App\Models\Category;
class SubcategoryController extends Controller
{
    function __construct()
    {
     
         $this->middleware('permission:Categories Mangement|create Category|edit Category|delete Categories', ['only' => ['index']]);
         $this->middleware('permission:create Category', ['only' => ['create','store']]);
         $this->middleware('permission:edit Category', ['only' => ['edit','update']]);
         $this->middleware('permission:delete Categories', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategory=subcategory::get();
        return view('backend.subcategories.index',compact('subcategory'));
    }
     
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory=new subcategory();
        $subcategory->name=$request->input('name');
        $subcategory->category_id=$request->input('category_id');
        if($request-> hasFile('image')){
            $fliename=time().'.'.$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('subcategories',$fliename,'public');
            $subcategory->image=$path;
           
        }
        $subcategory->save();
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sub= subcategory::find($id);
        $categories = Category::get();
        return view('backend.subcategories.edit',compact('sub','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $subcategory=subcategory::findOrFail($id);
        $subcategory->name=$request->input('name');
        $subcategory->category_id=$request->input('category_id');
        if($request-> hasFile('image')){
            $fliename=time().'.'.$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('subcategories',$fliename,'public');
            $subcategory->image=$path;
           
        }
        $subcategory->save();
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory = subcategory::find($id)->delete();
            return redirect()->route('subcategory.index');
    }
}
