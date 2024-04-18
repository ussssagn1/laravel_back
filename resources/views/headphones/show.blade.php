@extends('layout.main')
@section('content')
    <div class="mx-auto" style="max-width: 900px">
        <div>{{$headphones->id}}</div>
        <div>{{$headphones->name}}</div>
        <div>{{$headphones->type}}</div>
        <div>{{$headphones->type_connect}}</div>
        <div>{{$headphones->company}}</div>
        <div>{{$headphones->color}}</div>
        <div><a href="{{route('headphones.index')}}" class="btn btn-primary">Back</a></div>
        <div><a href="{{route('headphones.edit', $headphones->id)}}" class="btn btn-primary">Edit</a></div>
        <div>
            <form action="{{route('headphones.delete', $headphones->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Destroy">
            </form>
        </div>
    </div>

@endsection
