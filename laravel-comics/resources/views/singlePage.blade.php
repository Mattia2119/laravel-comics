@extends('layouts.base')

@section('content')

 <div class="section">
  
   <img src="{{$single['thumb']}}">
   <h2>{{$single['title']}}</h2>
   <p>{{$single['price']}}</p>
   <p>{{!! $single['description'] !!}}</p>

 </div>

@endsection