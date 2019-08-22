@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($orders as $orders)
            <div class="lists" id="{{$orders->name}}">
                <div class="all-orders">
                    {{$orders->name}}<br>
                    {{$orders->lastname}}<br>
                    {{$orders->phone}}<br>
                    {{$orders->address}}<br>
                    {{$orders->food}}<br>
                    {{$orders->quantity}}<br>
                </div>  
                        <div id ="delivered" class="btn btn-success" onclick="delivered({{ $orders->id }});">
                            Delivered
                        </div>
                        <div id ="undelivered" class="btn btn-danger" onclick="undelivered({{ $orders->id }});">
                            Undelivered
                        </div>
            </div>
            <hr>
        @endforeach
@endsection