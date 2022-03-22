@extends('admin.adminhome')

@section('content')



<div class="container">
    <h1 class="text-center p-2">Customers Order</h1>
    <form action="{{ url('/search') }}" method="get">

        @csrf

        <div class="" style="width:100%">
          <input type="text" name="search" id="" class="text-dark py-2 mt-1">
          <input type="submit" value="Search" class="my-1 btn btn-success" style="padding:12px">
        </div>
      </form>

      <div  class="table table-responsive  mt-5 m-auto" >
          
         
          <table class="table text-white">
              <tr>
                  <th>Food name</th> <th>Price</th><th>Quantity</th> <th>Client name</th> <th>Phone</th><th>Address</th><th>Total price</th>
              </tr>
              @foreach($orders as $order)
              <tr>
                  <td>{{ $order->foodname }}</td> <td>{{ $order->price }}</td><td>{{ $order->quantity }}</td><td>{{ $order->name }}</td><td>{{ $order->phone }}</td><td>{{ $order->address }}</td><td>{{$order->price * $order->quantity }}</td>
              </tr>
              @endforeach
          </table>
      </div>

</div>

@endsection


   