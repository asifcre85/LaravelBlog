
@extends('layouts.app')
@section('content')
       

         <h1>{{$title}} </h1>
         @if(count($sevices) >0)
         <ul class="list-group">
             @foreach ($sevices as $sevice)
               <li class="list-group-item">{{$sevice}}</li>  
             @endforeach
         </ul>
         @endif
         @endsection
    