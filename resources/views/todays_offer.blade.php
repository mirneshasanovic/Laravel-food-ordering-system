@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($food as $food)
        {{$food->food}}   <h1>{{$food->quantity}}</h1> 
        <br/>
        @endforeach
        <a href=""  ><button class="btn btn-primary" onclick="showForm()"> Order a food </button></a>
        <div class="imeee" onclick="showForm()">Oksss</div>
        <br>
        <br>
        <div class="form-class-todays-offer">
            {!! Form::open(['action' => 'FoodController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => "off"]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('food', 'Type of food:', array('class' => 'boldfont')) !!}
                    {!! Form::select('food', array('chocolate' => 'Chocolate', 'sandwich' => 'Sandwich', 'apple' => 'Apple', 'orange' => 'Orange', 'cherry' => 'Cherry', 'pear' => 'Pear')); !!}
                </div>    
                <div class="form-group">
                        {!! Form::label('quantity', 'Total amount of purchased food in kilos:', array('class' => 'boldfont')) !!}
                        {!! Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Total amount of purchased food in kilos', 'required' => 'required']) !!}
                </div>

                        {!! Form::submit('Submit', ['class'=>'form-control', 'class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection