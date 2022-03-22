@extends('admin.adminhome')


@section('content')

<div style="width:30% " class="mx-auto admin-chef text-center ">
<h1 class=" mt-4">Admin Chef</h1>

<div>
    <table class="p-3">
       
        <tr>
            <th>Name</th> <th>Speciality</th> <th>Image</th>
        </tr>
        @foreach($chefs as  $chef)
        <tr>
            <td>{{ $chef->name }}</td> <td>{{ $chef->speciality }}</td> <td><img src="storage/chefs/{{ $chef->image }}" width="100" ></td>
            <td><a class="" href="{{ url('editchef',$chef->id) }}">Update Chef</a></td>
            <td><a class="" href="{{ url('chef',$chef->id) }}">Delete Chef</a></td>
        </tr>
        @endforeach
    </table>
</div>

</div>

@endsection
