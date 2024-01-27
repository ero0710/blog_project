@extends('layouts.standar')
@section('title')
    Написать блог
@endsection
@section('content')
    <h1>Написать блог</h1>

    @if ($errors->any())
        <div class="alert alert-danger" style="width: 500px; margin-left: 10%;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blog create')}}" method="post">
        @csrf
        <div class="form-group container">
            <label for="message"></label>
            <textarea name="message" style="width: 500px;height: 200px;margin-left: 1%"  id="message" class="form-control" placeholder="Enter your message"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success" style="margin-left: 10%">Submit</button>
    </form>
@endsection
