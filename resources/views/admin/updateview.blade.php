@extends('admin.adminhome')
<base href="/public">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sx-12 col-sm-12 col-md-8 offset-2 p-0">
            <div class=" text-left my-3  " style="width:100%">
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


                <h3 class=" text-center text-success"> UPDATE DISH</h3>

                <form action="{{ url('/updatemenu', $food->id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <div>
                            <label for="title" class="mt-2">Title</label>
                            <input class="form-control text-white" type="text" name="title" value="{{ $food->title }}">
                        </div>
                        <div>
                            <label for="price" class="mt-2">Price</label>
                            <input class="form-control text-white" type="text" name="price" value="{{ $food->price }}">
                        </div>


                        <div>
                            <label for="image" class="mt-2">Old Image</label>
                            <img src="./storage/image/{{ $food->image }}" height="100px" width="100px">
                        </div>

                        <div>
                            <label for="image" class="mt-2">New Image</label>
                            <input class="form-control text-white" type="file" name="image">
                        </div>
                        <div>
                            <label for="description" class="mt-2">Description</label>
                            <input class="form-control text-white" type="text" name="description" value="{{ $food->description }}">
                        </div>

                        <div>
                            <input class="btn btn-success my-2" type="submit" name="submit" value="Update">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endsection