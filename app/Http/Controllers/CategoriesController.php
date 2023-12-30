<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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
       $category=Category::paginate(3);
        return view('backend.categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=new Category();
        $category->name=$request->input('name');
        $category->status=$request->input('status');
        if($request-> hasFile('photo')){
            $filename=time().'.'.$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('categories',$filename,'public');
            $category->photo = $path;
           
        }
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('backend.categories.edit',['category'=>Category::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $category)
    {
        $category=Category::findOrFail($category);
        $category->name=$request->input('name');
        $category->status=$request->input('status');
        if($request-> hasFile('photo')){
            $filename=time().'.'.$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('categories',$filename,'public');
            $category->photo=$path;
           
        }
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}