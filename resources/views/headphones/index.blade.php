@extends('layout.main')
@section('content')
    <div class="mx-auto" style="max-width: 900px">
        <a class="btn btn-primary" href="{{route('headphones.create')}}">Create One</a>
        @foreach($headphones as $headphone)
            <a href="{{route('headphones.show', $headphone->id)}}"><div class="my-3">{{$headphone->id}} - {{$headphone->name}}</div></a>
        @endforeach
    </div>
@endsection
