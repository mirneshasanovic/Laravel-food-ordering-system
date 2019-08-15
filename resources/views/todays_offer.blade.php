@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($food as $food)
        {{$food->food}}   <h1>{{$food->quantity}}</h1>
        <br/>

        @endforeach
    </div>
@endsection