@extends('admin.adminhome')

<base href="/public">

@section('content')

<div style="width:30% " class="mx-auto admin-chef text-center ">
<h1 class=" mt-4">Edit Chef</h1>

<form action="{{ url('updatechef',$edit->id) }}" class="" enctype="multipart/form-data" method="post">
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
    <input class="form-control text-white" type="text" name="name" id="" placeholder="Enter name" value="{{ $edit->name }}">
</div>
<div class="text-left">
    <label  for="speciality"  class="my-2">Speciality</label>
    <input class="form-control text-white" type="text" name="speciality" id="" placeholder="Chef speciality" value="{{ $edit->speciality }}">
</div>

<div class="text-left">
    <label  for="image"  class="my-2 text-white">Old image</label>
    <img src="/storage/chefs/{{ $edit->image }}" width="100">
</div>

<div class="text-left">
    <label  for="image"  class="my-2 text-white">New image</label>
    <input class="form-control" type="file"  name="image" id="" >
</div>
</div>

<div class="text-left ">
  <input type="submit" name="edit" class="btn btn-success" value="Update chef">
</div>

</form>

</div>


@endsection