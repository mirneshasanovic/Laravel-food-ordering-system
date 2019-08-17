@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($orders as $orders)
            <div class="lists">
                <div class="all-orders">
                    {{$orders->name}}<br>
                    {{$orders->lastname}}<br>
                    {{$orders->phone}}<br>
                    {{$orders->address}}<br>
                    {{$orders->food}}<br>
                    {{$orders->quantity}}<br>
                </div>
                <div class="btn btn-primary">
                    Delivered
                </div>
            </div>
            <hr>
        @endforeach
@endsection