@extends('admin.adminhome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sx-12 col-sm-12 col-md-8 offset-2">
            <div class=" text-left my-3 m-auto" style="width:100%">
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


                <h2 class="title text-center text-success"> CREATE SPECIAL DISH</h2>

                <form action="{{ url('foodmenu') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <div>
                            <label for="title" class="mt-2">Title</label>
                            <input class="form-control text-white" type="text" name="title">
                        </div>
                        <div>
                            <label for="price" class="mt-2">Price</label>
                            <input class="form-control text-white" type="text" name="price">
                        </div>
                        <div>
                            <label for="image" class="mt-2">Image</label>
                            <input class="form-control text-white" type="file" name="image">
                        </div>
                        <div>
                            <label for="description" class="mt-2">Description</label>
                            <input class="form-control text-white" type="text" name="description">
                        </div>

                        <div>
                            <input class="btn btn-success my-2" type="submit" name="submit" value="Create">
                        </div>
                    </div>
                </form>

                <hr>
                <div class="table-responsive">
                    <table class="table text-white">
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                        @foreach($food as $value)
                        <tr>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->description }}</td>
                            <td><img src="storage/image/{{ $value->image }}" alt="food-image" class="w-20" style="border-radius:0"> </td>
                            <td><a class="btn btn-success" href="{{ url('deletemenu',$value->id) }}">Delete</a></td>
                            <td><a class="btn btn-success" href="{{ url('updatemenu',$value->id) }}">Update</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                {{ $food->links() }}

            </div>
        </div>
    </div>
</div>

@endsection