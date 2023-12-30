<html>
    <head>
    
 <link href="{{asset('../css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  
    <!-- Responsive CSS -->
    
   


    
    
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
@extends('front-end.navbar')
@section('content')

<div class="container m-5">
    <div class="row">
        <div class="col-md-9">
            @foreach($carts as $cart)
            <div class="card mb-3">
                <div class="card-body">
                    <table class="table table-striped mt-2 mb-2">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                          
                      
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart->items as $item)
                 
                        <tr>
                            <td>{{$item['name']}}</td>
                            @if(isset($item['hasoffer']) && $item['hasoffer'] == 1)
                            <td>{{$item['discounted_price']}}</td>
                            @else
                            <td>{{$item['price']}}</td>
                            @endif
                            <td>{{$item['qty']}}</td>
                          
                        </tr>
                
                        @endforeach
                    </tbody>
                    </table>
                </div>

            </div>
            <p class="badge badge-pill bg-success text-white mb-3 p-3">Total Price: {{$cart->totalPrice}}$</p>
     
            @endforeach
            {{ $orders->links() }}
                </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



</body>

</html>
@endsection