<?php

namespace App\Http\Controllers;

use App\Models\store;
use App\Models\user;
use App\Models\subcategory;
use App\Models\Category;
use App\Models\Tenant;
use App\Notifications\createstore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class StoreController extends Controller
{
    function __construct()
    {
     
         $this->middleware('permission:stores Mangement|create store|edit store|delete store', ['only' => ['index']]);
         $this->middleware('permission:create store', ['only' => ['create','store']]);
         $this->middleware('permission:edit store', ['only' => ['edit','update']]);
         $this->middleware('permission:delete store', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $store=store::paginate(5);
                return view('backend.stores.index',compact('store'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    
       
    }
   
    public function addstores($id){
        $tenant=Tenant::all();

        $categories = Category::get();
        $subcategories = SubCategory::get();
        $user=user::find($id);
        return view('backend.stores.create',['users'=>$user->id,'categories'=> $categories ,'subcategories'=>$subcategories,'tenant'=>$tenant]);
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $store=new store();
        
        $store->name=$request->input('title');
        $store->user_id=$request->input('user');
     
        if($request -> hasFile('image')){
           
            $filename=time().'.'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Store-images',$filename,'public');
            $store -> image =  $path ;
           
        }
        $store->status=$request->input('status');
        $store->rating=$request->input('rating');
        $store->category_id=$request->input('category_id');
        $store->subcategory_id=$request->input('subcategory_id');
        $store->description=$request->input('desc');
        $store->address=$request->input('address');
        $store->thems=$request->input('thems');
        $store->tenant_id=$request->input('tenant_id');
       $r= store::pluck('id');
        $user=user::get();
// Notification::send($user,new createstore($r,$store->name));

        $store->save();
        return redirect()->route('store.index')->with(['add' =>' تم الاضافة بنجاح ']);
        
    }


    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        //



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tenant=Tenant::all();

        $categories = Category::get();
        $subcategories = SubCategory::get();
        $edit=store::find($id);
        return view('backend.stores.edit',['st'=>$edit,'categories'=> $categories ,'subcategories'=>$subcategories,'tenant'=>$tenant]);
        //

    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,$id)
    {
        //
        $toUpdate=store::find($id);
        $toUpdate->name=$request->input('title');
        $toUpdate->user_id=$request->input('user_id');;


       
            if($request -> hasFile('image')){
       
                $filename=time().'.'.$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('Store-images',$filename,'public');
                $toUpdate -> image =  $path ;
               
            }

        $toUpdate->description=$request->input('desc');
        $toUpdate->address=$request->input('address');
        $toUpdate->category_id=$request->input('category_id');
        $toUpdate->subcategory_id=$request->input('subcategory_id');
        $toUpdate->status=$request->input('status');
        $toUpdate->thems=$request->input('thems');
        $toUpdate->rating=$request->input('rating');
        $toUpdate->tenant_id=$request->input('tenant_id');

        $toUpdate->save();
        return redirect()->route('store.index')->with(['edit' =>' تم التعديل بنجاح ']); ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete=  store::find($id);
        $image=public_path('Store-images/' .$delete->image);
        if(file_exists($image)){
            unlink($image);
        }
        $delete->delete();
      return redirect()->route('store.index')->with(['delete' =>' تم الحذف بنجاح ']);
    }
       
public function active(Request $request ,$id){
  if($request->get('action')=='active'){
  $status=store::find($id);
  $text='active';
  $status->status=$text;
  $status->save();
}
if($request->get('action')=='inactive'){
  $status=store::find($id);
  $text='inactive';
  $status->status=$text;
  $status->save();

 

}
return redirect()->route('store.index');
}


}
