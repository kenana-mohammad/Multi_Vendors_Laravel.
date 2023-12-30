<html>
    <head>
    
 <link href="{{asset('../css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  
    <!-- Responsive CSS -->
    
   


    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
@extends('front-end.navbar')
@section('content')

<div class="container m-5">
    <div class="row">
        @if($cart)
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
           
            @endforeach 
        </ul>
        </div>
        @endif
     <div class="col-md-7">
     @foreach($cart->items as $product)
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title">Name: {{$product['name']}}</h5>
            <div class="card-text">
            @if(isset($product['hasoffer']) && $product['hasoffer'] == 1)
                    <p>Price: <del>${{ $product['price'] }}</del> <span>${{ $product['discounted_price'] }}</span></p>
                   
                @else
                    <p>Price: ${{ $product['price'] }}</p>
                @endif
            </div>
            <form action="{{ route('cart.update', $product['id']) }}" method="POST">
    @csrf
    @method('put')
    <div class="input-group">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default quantity-minus" data-type="minus" data-field="qty">
                <i class="fa fa-minus"></i>
            </button>
        </span>
        <input type="text" name="qty" id="qty" class="form-control input-number" value="{{ $product['qty'] }}" min="1" max="100">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default quantity-plus" data-type="plus" data-field="qty">
                <i class="fa fa-plus"></i>
            </button>
        </span>
    </div>
  
</form>
            <form action="{{ route('cart.destroy', $product['id']) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm ml-4" style="margin-top: 10px; float:right">Remove</button>
            </form>
        </div>
    </div>
@endforeach
     </div> 
     <div class="col-md-2">
     </div>
     <div class="col-md-3">
     <div class="card bg-secondary text-white">
    <div class="card-body">
        <h5 class="card-title">Your Card</h5>
        <div class="card-text">
        <p> Total Price : {{$cart->totalPrice}}$</p>
        <p> Total Amount : {{$cart->totalQty}}</p>
            </div>
      
        <a href="{{route('cart.create')}}" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Checkout</a>
       
    </div>
</div>
     </div> 
     @else
     <p>there are no items in the cart</p> 
@endif
</div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
            function updateTotalQty(key) {
                var inputField = document.getElementById('qty' + key);
                var totalQtyField = document.getElementById('totalQty' + key);
                totalQtyField.value = parseInt(inputField.value);
            }

            // Add event listeners to the plus and minus buttons
            var incrementButtons = document.getElementsByClassName('quantity-plus');
            var decrementButtons = document.getElementsByClassName('quantity-minus');

            for (var i = 0; i < incrementButtons.length; i++) {
                incrementButtons[i].addEventListener('click', function() {
                    var inputField = this.parentNode.parentNode.querySelector('.input-number');
                    var currentValue = parseInt(inputField.value);
                    inputField.value = currentValue + 1;
                    updateTotalQty(inputField.getAttribute('data-id'));
                });
            }

            for (var i = 0; i < decrementButtons.length; i++) {
                decrementButtons[i].addEventListener('click', function() {
                    var inputField = this.parentNode.parentNode.querySelector('.input-number');
                    var currentValue = parseInt(inputField.value);
                    if (currentValue > 1) {
                        inputField.value = currentValue - 1;
                        updateTotalQty(inputField.getAttribute('data-id'));
                    }
                });
            }
        </script>


</body>

</html>
@endsection