@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">   
               <div class="card-body">
                   <h1 class="card-title"><strong class="name" style="font-family: 'Lobster Two', cursive; color:rgb(0, 0, 0);">{{ $EONETdata['title'] }}</strong></h1>
                   <p class="card-text">{{$EONETdata['explanation']}}</p>
                   <img class="card-img-top" src="{{ $EONETdata['hdurl'] }}" alt="Card image cap">
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
