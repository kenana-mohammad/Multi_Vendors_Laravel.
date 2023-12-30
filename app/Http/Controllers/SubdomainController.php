<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\domains;
class SubdomainController extends Controller
{
    //
    public function index(){
        $domain=Tenant::all();
return view('Tenant.subdomain',compact('domain'));
    }
     public function create(){
        return view('Tenant.create');
     }


    
    public function store(Request $request){
    $tenant=Tenant::create(['id'=>$request->subdomain]);
    $tenant->domains()->create(['domain'=>$request->subdomain  .'.localhost']);
    return redirect()->route('showdomain');
    }
}
