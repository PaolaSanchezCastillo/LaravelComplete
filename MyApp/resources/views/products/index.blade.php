

@extends('layouts.app')

@section('content')

<h1>Products</h1>

@if (count($errors) > 0 )
<div class="alert alert-danger" role="alert">
   @foreach ($errors->all() as $error)
   {{$error}}
       
   @endforeach
  </div>
    
@endif



@include('products.lista')

@endsection
@push('js')
    
@endpush