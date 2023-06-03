

@extends('layouts.app-master')

@section('content')
{{-- --}}
<form method="post" action="{{route('register.perform')}} ">
    @csrf
    <div class="mb-3">
        <h1>Registrarse</h1>
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    @if ($errors->has('email'))
    <div class="alert alert-warning" role="alert">
       {{$errors->first('email')}}
      </div> 
    @endif
    <div class="mb-3"> 
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" class="form-control" name ="username" required>
    </div>
    @if ($errors->has('username'))
    <div class="alert alert-warning" role="alert">
       {{$errors->first('username')}}
      </div> 
    @endif
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    @if ($errors->has('password'))
    <div class="alert alert-warning" role="alert">
       {{$errors->first('password')}}
      </div> 
    @endif

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" required>
      </div>

      @if ($errors->has('password_confirmation'))
      <div class="alert alert-warning" role="alert">
         {{$errors->first('password_confirmation')}}
        </div> 
      @endif
     
   
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection