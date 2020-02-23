@extends('layouts.app')

@section('content')
   <center> <h2>Your Cart </h2></center>
   <div class="col-12 center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item) //repete_items
                <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{ $item->}}</td>
                    <td></td>
                </tr>
                @endforeach
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
   </div>
  
@endsection