
@if (isset($errors) && count($errors) >0)
<div class="alert alert-warning" role="warning">
    <ul class="list-unstyled mb-0">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>            
        @endforeach
    </ul>
</div>  
@endif


@if (Session::get('success', false))
<?php $data = Session::get('success'); ?>
@if (is_array($data))
        @foreach ($data as $msg)
            <i>{{$msg}}</i>
            
        @endforeach
@else
    <i>{{$data}}</i>
    
@endif
@endif
