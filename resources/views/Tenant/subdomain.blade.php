@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">All Domain </h4>
                        </div>
                        <div class="card-header py-3 col-lg-2">
<a href="{{route('subdomin')}}" class="btn btn-primary  "> Add Domin </a>
</div>
                        <div class="card-body">
                            <div class="table-responsive " >
                                <table class="table table-bordered data-table" id="dataTable" >
                                    <thead>
                                        <tr> 
                                            <th>ID</th>
                                           
                                            
                                    
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach($domain as $domain)
                                        <tr>
                                            <td>{{$domain->id}}</td>
                           
                                          
                                           <td>
                                           <form action=" method="POST">
                                                @csrf
                                                @method('DELETE')
                                             <button type="Delete" value="delete" class="btn btn-danger" >Delete </button>
                                        </form>
                                    </td>
                                  
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                     
                            </div>
                        </div>
                    </div>
@endsection