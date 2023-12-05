@extends("layouts.default")

@section("content")

    <h1>{{$product->title}}</h1>
    <img src="/<?= $product->image_url ?>" alt="">
    <h2>Description:</h2>
    <p>{{$product->description}}</p>
    <h3>Price: {{$product->price}}$</h3>
@endsection
