@extends('admin.adminhome')

@section('content')

      <div  class="table table-responsive  mt-5 m-auto">
          <table class="table text-white">
              <tr>
                  <th>Name</th> <th>Email</th> <th>Date</th> <th>Time</th> <th>Phone</th> <th>Message</th>
              </tr>
              @foreach($reserve as $value)
              <tr>
                  <td>{{ $value->name }}</td> <td>{{ $value->email }}</td><td>{{ $value->date }}</td> <td>{{ $value->time }}</td> <td>{{ $value->phone }}</td>  <td>{{ $value->message }}</td>
              </tr>
              @endforeach
          </table>
      </div>

@endsection


   