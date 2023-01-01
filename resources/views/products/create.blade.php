@extends('layouts.default')
@section('content')

<div class="container">
    <h1>Ürün Ekle <a href="{{route('products.index')}}" class="btn btn-warning">Ürünleri Görüntüle</a></h1>
    <form action="{{route('products.store')}}" class="form-group">
        @csrf
    
        <div class="form-group">
            <label for="name">Ürün Adı</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Ürün Fiyatı</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-primary">Ürün Kaydet <i class="fas fa-save"></i></button>
    </form>
</div>

@endsection