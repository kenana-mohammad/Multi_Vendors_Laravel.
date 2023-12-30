@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">

<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Add</h2>
                                 </div>
                                     </div> 


  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('store.subdomin')}}" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                            <label>subdomin</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="subdomain" id="subdomain">
</div>                                  
                                      
                                     
                                        <button type="submit" class="btn btn-primary">save </button>
                                      
                                    </form>
                                </div>
@endsection
