

@extends('layouts.app-master')

@section('content')
<form>

    @csrf
    
    <h1>Login</h1>

    @include('layouts.partials.messages')
    <div class="form-group">
        <input type="text" class="form-control" name="username" 
        placeholder="Username" required="required">
        <label for=""> Usuario o Email</label>
        @if($errors->has('username'))'
        <div class="alert alert-danger" role="alert">
           {{$errors->first('username')}}
          </div>
        @endif
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required" >
        <label for="">Password</label>
        @if($errors->has('password'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('password')}}
          </div>
        @endif

    </div>


</form>




@endsection
