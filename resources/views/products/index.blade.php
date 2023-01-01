@extends('layouts.default')
@section('content')
<body>
    <div class="container">
        <div class="row">
            <h1>Ürünler <a href="{{route('products.create')}}" class="btn btn-primary">Ürün Ekle</a></h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Fiyatı</th>
                </tr>
            </thead>
            <tbody>

               @if($products)
               
               @foreach($products as $key=>$product)

               <td>{{$product['name']}}</td>
               <td>{{$product['price']}}</td>
               <td><a href="{{route('products.edit',$key)}}" class="btn btn-primary">Güncelle</a>
                <form action="{{route('products.destroy',$key)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Sil</button>
               @endforeach
               @endif
            </tbody>

    </div>
  
@endsection