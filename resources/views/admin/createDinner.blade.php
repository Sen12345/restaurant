@extends('admin.adminhome')


@section('content')

<div class=" text-left my-3 m-auto" style="width:50%">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="title text-center "> CREATE DINNER DISH</div>

    <form action="{{ url('createDinner') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <div>
                <label for="title" class="mt-2">Title</label>
                <input class="form-control text-white" type="text" name="title">
            </div>
            <div>
                <label for="price" class="mt-2">Price</label>
                <input class="form-control text-white" type="number" name="price">
            </div>
            <div>
                <label for="description" class="mt-2">Description</label>
                <input class="form-control text-white" type="text" name="description">
            </div>
            <div>
                <label for="image" class="mt-2">Image</label>
                <input class="form-control text-white" type="file" name="dinner">
            </div>

            <div>
                <input class="btn btn-success my-2" type="submit" name="submit" value="Create">
            </div>
        </div>
    </form>

    <hr>

    <!-- <table >
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
               
            </table>-->

</div>
@endsection