@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add client</div>

                 @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif
                            <form class="form-horizontal"  method="GET" action="/addclient">
                            @csrf
                                     <label for="name" class="col-md-4 control-label">name</label>
                                    <input  type="string" class="form-control" name="name">
                                    <label for="CIN" class="col-md-4 control-label">CIN</label>
                                    <input  type="string" class="form-control" name="CIN">
                                    <label for="email" class="col-md-4 control-label">email</label>
                                    <input type="email" class="form-control" name="email" >
                                    <label for="password" class="col-md-4 control-label">password</label>
                                    <input type="password" class="form-control" name="password" >


                                    <input type="submit" value="ADD" name="button">
</div>

</div>
</div>
</div>
 
@endsection