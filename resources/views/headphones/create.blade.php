@extends('layout.main')
@section('content')
    <form class="mx-auto" style="max-width: 900px" action="{{route('headphones.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Connect Type</label>
            <input type="text" name="type_connect" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Color</label>
            <input type="text" name="color" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">img/url</label>
            <input type="text" name="img_url" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="form-group mb-3">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
