
@extends('layouts.app')
@section('content')
@foreach ($product as $product)
    



<form >
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ProductName</label>
      <input type="text" class="form-control" id="productName" value='{{$product->ProductName}}'>
     
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">CategoryName</label>
      <input type="text" class="form-control" id="categoryName" value='{{$product->CategoryName}}'>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">UnitPrice</label>
        <input type="number" class="form-control" id="price" min='0.1' value='{{$product->UnitPrice}}'>
       
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">UnitsInStock</label>
        <input type="number" class="form-control" id="units" min="1" step="1" max="1000" value='{{$product->UnitsInStock}}'>
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endforeach

  @endsection