<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\user;
use App\Models\subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class StoreUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
      
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::get();
        $subcategories = SubCategory::get();
        return view('store-user.create',['categories'=> $categories ,'subcategories'=>$subcategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $store=new store();

        

        $store->name=$request->input('title');
     
        $store->user_id=Auth::user()->id;
        if($request -> hasFile('image')){
           
            $filename=time().'.'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Store-images',$filename,'public');
            $store -> image =  $path ;
           
        }
        $store->rating=$request->input('rating');
        $store->category_id=$request->input('category_id');
        $store->subcategory_id=$request->input('subcategory_id');
        $store->status=$request->input('status');
        $store->description=$request->input('desc');
        $store->address=$request->input('address');
        $store->save();
      return redirect()->route('stores.show',Auth::user()->id)->with(['add' =>' تم الاضافة بنجاح ']);
        }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        
        $user=user::find($id);
        $stores=$user->store;
        return view('store-user.index',['store'=>$stores]);

    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
           //
           $categories = Category::get();
           $subcategories = SubCategory::get();
        $edit=store::find($id);
        return view('store-user.edit',['stores'=>$edit,'categories'=> $categories ,'subcategories'=>$subcategories]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $stores)
    {
        //
        $toUpdate=store::findOrFail($stores);
        $toUpdate->name=$request->input('title');
        $toUpdate->user_id=$request->input('user_id');;
       
        if($request -> hasFile('image')){
            if($request -> hasFile('image')){
       
                $filename=time().'.'.$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('Store-images',$filename,'public');
                $toUpdate -> image =  $path ;
               
            }
        }
        $toUpdate->description=$request->input('desc');
        $toUpdate->address=$request->input('address');
        $toUpdate->category_id=$request->input('category_id');
        $toUpdate->subcategory_id=$request->input('subcategory_id');
     
        $toUpdate->rating=$request->input('rating');
        $toUpdate->save();
        return redirect()->route('stores.show',Auth::user()->id)->with(['edit' =>' تم التعديل بنجاح ']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete=  store::findOrFail($id)->delete();
        return redirect()->back()->with(['delete' =>' تم الحذف بنجاح ']);
    }
}
