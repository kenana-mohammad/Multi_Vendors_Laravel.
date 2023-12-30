<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thems</title>
   <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   </head>
   <body class="bg-light">
   @extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
<div class="row">

<div class="card-header py-3 col-lg-10">
        <h1 class="text-center text-secandary mt-3"> thems</h1>
        <div class="container mt-5" >
                <div class="row">
                     
                              
                                        <div class="col col-md-4">
                 <form action="{{route('viewthem',$id->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                           <input type="hidden" value="them1" name="thems">
                                        
                                    

                                           <button   class="btn " name="thems" value="them1" >

                                           <img src="../assets/them1/images/nails.png" width="300px" height="500px">
<h3 class="text-center">them1</h3>
                                           </button>
</form>
</div>                    
<div class="col col-md-4">                
                                        <form action="{{route('viewthem',$id->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="thems"value='them2' >

                                               
                                                <button   class="btn " name="thems" value="them2" >
                                                        
                                                <img src="../assets/them1/images/t1.png" width="300px" height="500px">
                                                <h3 class="text-center">them2</h3>

                                        </button>

                                        </form> </div>

                                        <div class="col col-md-4">                
                                        <form action="{{route('viewthem',$id->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="thems"value='them3' >

                                               
                                                <button   class="btn " name="thems" value="them3" >
                                                        
                                                <img src="../assets/them1/images/fashen.png" width="300px" height="500px">
                                                <h3 class="text-center">them3</h3>

                                        </button>

                                        </form> </div>
                           
</div></div</div></div></div>@endsection