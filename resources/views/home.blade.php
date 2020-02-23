@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container text-center">
        <h2>Products</h2>
        <div class="row">
        @foreach ($product as $item)
            
       
            <div class="card col-4">
            <img class="card-img-top" src="{{asset('image/anon.jpg')}}" alt="">
                <div class="card-body">
                <a href="{{route('cart.index',$item->id)}}" class="card-link">Add Card</a>
                </div>
            </div>
            @endforeach
    </div>
 </div>
</div>
@endsection
