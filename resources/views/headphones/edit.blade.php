@extends('layout.main')
@section('content')
    <form class="mx-auto" style="max-width: 900px" action="{{route('headphones.update', $headphones->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->price}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->type}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Connect Type</label>
            <input type="text" name="type_connect" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->type_connect}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Color</label>
            <input type="text" name="color" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->color}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->company}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">img/url</label>
            <input type="text" name="img_url" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$headphones->img_url}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
