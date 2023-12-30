@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">

    <div class="row">
        <div class="col-9 py-3">

            <h2 class="m-0 font-weight-bold text-primary">Add</h2>
        </div>
        <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12 py-3">
            <form action="{{route('addOffer',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

          
                <input type="hidden" class="form-control" name="hasoffer" >



                <div class="form-group">
                    <label>discount</label>
                    <input type="number" class="form-control" placeholder="discount" name="discount" value="{{old('discount')}}">
                </div>
                <div class="form-group">
                    <label>date</label>
                    <input type="date" class="form-control" placeholder="Expdate" name="Expdate" value="{{old('Expdate')}}">
                </div>
                



                <div class="form-group">
                                            <label>Photoslider</label>
                                            <input type="file" class="form-control"  name="photoslider">
                                        </div>
                                      
               


               
                <button type="submit" class="btn btn-primary">Submit </button>

            </form>
        </div>
    </div>
    @endsection