@extends('admin.adminhome')

@section('content')

<div style="width:30% " class="mx-auto admin-chef text-center ">
<h1 class=" mt-4">Add Chef</h1>

<form action="{{ url('storechef') }}" class="" enctype="multipart/form-data" method="post">
    @csrf

@if(session('status'))
<div class="alert alert-success">   {{ session('status') }} </div>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
 <div class="alert alert-warning">   {{ $error }} </div>
@endforeach
@endif

<div class="form-group ">
<div class="text-left ">
    <label  for="name" class="my-2">Name</label>
    <input class="form-control text-white" type="text" name="name" id="" placeholder="Enter name">
</div>
<div class="text-left">
    <label  for="speciality"  class="my-2">Speciality</label>
    <input class="form-control text-white" type="text" name="speciality" id="" placeholder="Chef speciality">
</div>
<div class="text-left">
    <label  for="image"  class="my-2 text-white">Select image</label>
    <input class="form-control" type="file" name="image" id="">
</div>
</div>

<div class="text-left ">
    <input type="submit" name="submit" value="Save Chef" class="px-3  py-2 btn btn-success " style="width:130px;margin-right:10px"><a class="btn btn-success px-3 py-2 "  style="width:130px" href="{{ url('chefs') }}">View Chef</a>
</div>
</form>

</div>

@endsection