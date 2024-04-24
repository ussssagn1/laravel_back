@extends('layout.main')
@section('content')
    <div class="mx-auto" style="max-width: 900px">
        <div class="my-2">{{$headphones->id}}</div>
        <div class="my-2">{{$headphones->name}}</div>
        <div class="my-2">{{$headphones->type}}</div>
        <div class="my-2">{{$headphones->type_connect}}</div>
        <div class="my-2">{{$headphones->company}}</div>
        <div class="my-2">{{$headphones->color}}</div>
        <div class="d-flex gap-5 align-items-center">
            <div class="my-2"><a href="{{route('headphones.index')}}" class="btn btn-primary">Back</a></div>
            <div class="my-2"><a href="{{route('headphones.edit', $headphones->id)}}" class="btn btn-primary">Edit</a></div>
            <div>
                <form action="{{route('headphones.delete', $headphones->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Destroy">
                </form>
            </div>
        </div>

    </div>

@endsection
