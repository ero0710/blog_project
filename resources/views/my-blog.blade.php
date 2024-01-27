@extends('layouts.standar')
@section('title')
    Мой блог
@endsection
@section('content')
    <h1>Мой блог</h1>

    @foreach($data as $el)
        <div class="alert alert-info" style="width: 500px; margin-left: 10%;">
           <h3>{{$el->message}}</h3>
            <p>{{$el->email}}</p>
            <p><small>{{ $el->created_at }}</small></p>
{{--            <a href="{{ route('one-blog', $el->id) }}"><button class="btn-btn-warning">Detail</button></a>--}}
        </div>
    @endforeach
@endsection
