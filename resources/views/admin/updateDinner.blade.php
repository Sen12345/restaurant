@extends('admin.adminhome')
<base href="/public">
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


            <div class="title text-center "> UPDATE DINNER</div>

            <form action="{{ url('/updateDinner', $dinner->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <div>
                        <label for="title" class="mt-2">Title</label>
                        <input class="form-control text-white" type="text" name="title" value="{{ $dinner->title }}">
                    </div>
                    <div>
                        <label for="price" class="mt-2">Price</label>
                        <input class="form-control text-white" type="text" name="price" value="{{ $dinner->price }}">
                    </div>


                    <div>
                        <label for="image" class="mt-2">Old Image</label>
                     <img src="storage/Dinner/{{ $dinner->image }}" height="100px" width="100px">
                    </div>

                    <!-- <div>
                        <input type="hidden" method="PUT">
                    </div> -->

                    <div>
                        <label for="image" class="mt-2">New Image</label>
                        <input class="form-control text-white" type="file" name="dinner" >
                    </div>
                    <div>
                        <label for="description" class="mt-2">Description</label>
                        <input class="form-control text-white" type="text" name="description" value="{{ $dinner->description }}">
                    </div>

                    <div>
                        <input class="btn btn-success my-2" type="submit" name="submit" value="Update">
                    </div>
                </div>
            </form>
            
       @endsection
