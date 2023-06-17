

@extends('layouts.app-master')

@section('content')
<form method="post" action="{{route('auth.perform')}}">

    @csrf
    <div style="width: 50%; padding-left:25%">

   
    <h1 style="text-align: center">Login</h1>

    @include('layouts.partials.messages')
    <div class="form-group">
        <center><label for="" > Usuario o Email</label></center>
        <input type="text" class="form-control" name="username" 
        placeholder="Username" required="required">
        
        @if($errors->has('username'))'
        <div class="alert alert-danger" role="alert">
           {{$errors->first('username')}}
          </div>
        @endif
    </div>

    <div class="form-group">
       <center><label for="">Password</label></center> 
        <input type="password" class="form-control" name="password" placeholder="Password" required="required" >
        
        @if($errors->has('password'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('password')}}
          </div>
        @endif

    </div>
    <center><button type="submit" class="btn btn-primary">Primary</button>
</center>
    </div>

</form>




@endsection
