@extends('admin.adminhome')

@section('content')

<div style="position: relative;top:50px; margin-left:auto;margin-right:auto;">
<table class="table table-responsive;">
    <tr>
        <th>Name</th><th>Email</th><th>Action</th>
    </tr>
    @foreach($users as $value)
    <tr>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
       @if($value->user_type == "0")

       <td><a href="{{ url('delete',$value->id) }}">Delete</a></td>

       @else

       <td>Delete not allowed</td>

       @endif

    </tr>
    @endforeach
</table>
</div>

@endsection