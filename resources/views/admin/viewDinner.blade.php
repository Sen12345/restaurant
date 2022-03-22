@extends('admin.adminhome')


@section('content')
<div class="container">
<div class="row">
    <div class="col-sx-12 col-sm-12 col-md-12">
    <h2 class=" mt-4 text-center text-success">dinner</h2>
        <div class="table-responsive" style="width:100%">
            <table class="table p-3 text-white m-auto">
                <tr>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>DESCRIPTION</th>
                    <th>Image</th>
                </tr>
                @foreach($dinner as $dinners)
                <tr>
                    <td>{{ $dinners->title }}</td>
                    <td>{{ $dinners->price }}</td>
                    <td>{{ $dinners->description }}</td>
                    <td><img src="./storage/dinner/{{ $dinners->image }}"  style="cursor:pointer; border-radius:0"></td>
                    <td><a class="btn btn-success" href="{{ url('updateDinner', $dinners->id) }}">Update</a></td>
                    <td><a class="btn btn-success" href="{{ url('deleteDinner', $dinners->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </table>

        </div>

    </div>
</div>
</div>

@endsection