@extends('admin.adminhome')


@section('content')
<div class="container">
<div class="row">
    <div class="col-sx-12 col-sm-12 col-md-12">
    <h2 class=" mt-4 text-center text-success">Lunch</h2>
        <div class="table-responsive" style="width:100%">
            <table class="table p-3 text-white m-auto">
                <tr>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>DESCRIPTION</th>
                    <th>Image</th>
                </tr>
                @foreach($lunch as $lunchs)
                <tr>
                    <td>{{ $lunchs->title }}</td>
                    <td>{{ $lunchs->price }}</td>
                    <td>{{ $lunchs->description }}</td>
                    <td><img src="./storage/Lunch/{{ $lunchs->image }}"  style="cursor:pointer; border-radius:0"></td>
                    <td><a class="btn btn-success" href="{{ url('updateLunch', $lunchs->id) }}">Update</a></td>
                    <td><a class="btn btn-success" href="{{ url('deleteLunch', $lunchs->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </table>

        </div>

    </div>
</div>
</div>

@endsection