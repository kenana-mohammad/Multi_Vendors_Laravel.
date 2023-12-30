@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">

<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Add</h2>
                                 </div>
                                <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('ProductCat.index') }}"> Back</a>
                                </div>
                                     </div> 



                            <div class="row">
                                <div class="col-lg-12 py-3">
                                <form action="{{route('addslider',$id)}}" method="POST" enctype="multipart/form-data">

                                @csrf                                  
                                        <div class="form-group">
                                            <label>Photoslider</label>
                                            <input type="file" class="form-control"  name="photo">
                                            <button type="submit" class="btn btn-primary">Submit </button>

                                       
                                        </div>

</form>

</div>
@endsection