@extends('layouts.main')

@section('content')

<h2> Trains Schedules:</h2>
<div class="k_wrap">
  @foreach ($trains as $train)
    <div class="k_card my-5 mx-2">
      <div>Company: {{$train->company}}</div>
      <div>Departure Station: {{$train->depart_station}}</div>
      <div>Departure Time:<strong> {{$train->depart_time}} </strong></div> 
      <div>Arrive Time:<strong> {{$train->arrive_time}} </strong></div> 
      <div>Number of Train:<strong> {{$train->train_number}} </strong></div> 
      <div>Number of Carriage:<strong> {{$train->n_carriage}} </strong></div> 
      <div>In time: <span class="status">{{$train->in_time === 1 ? 'In time' : 'Late'}} </span></div> 
            
      
    </div>
  @endforeach 
</div>

@endsection

@section('title', 'trains')