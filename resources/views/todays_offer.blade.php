@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($food as $food)
        {{$food->food}}   <h1>{{$food->quantity}}</h1> 
        <br/>
        @endforeach
        <div class="btn btn-primary" onclick="showForm()">Order a food</div>
        <br>
        <br>
        <div class="form-class-todays-offer">
            {!! Form::open(['action'=>'CustomerController@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => "off"]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('food', 'Type of food:', array('class' => 'boldfont')) !!}
                    {!! Form::select('food', array('chocolate' => 'Chocolate', 'sandwich' => 'Sandwich', 'apple' => 'Apple', 'orange' => 'Orange', 'cherry' => 'Cherry', 'pear' => 'Pear')); !!}
                </div>    
                <div class="form-group">
                        {!! Form::label('quantity', 'Total amount of purchased food in kilos:', array('class' => 'boldfont')) !!}
                        {!! Form::text('quantity',null,['class'=>'form-control', 'placeholder'=>'Total amount of purchased food in kilos', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('name', 'Name:', array('class' => 'boldfont')) !!}
                        {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Enter your name', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('lastname', 'Lastname:', array('class' => 'boldfont')) !!}
                        {!! Form::text('lastname',null,['class'=>'form-control', 'placeholder'=>'Enter your lastname', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('phone', 'Phone:', array('class' => 'boldfont')) !!}
                        {!! Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Enter your phone', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('address', 'Address:', array('class' => 'boldfont')) !!}
                        {!! Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Enter your address', 'required' => 'required']) !!}
                </div>

                        {!! Form::submit('Submit', ['class'=>'form-control', 'class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection