@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add service</div>

                 @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif
                            <form class="form-horizontal"  method="GET" action="/addservice">
                            @csrf
                                     <label for="name" class="col-md-4 control-label">Name</label>
                                    <input  type="string" class="form-control" name="name">
                                    <label for="description" class="col-md-4 control-label">Description</label>
                                    <input  type="string" class="form-control" name="description">
                                    <label for="pic" class="col-md-4 control-label">Pic</label>
                                    <input type="text" class="form-control" name="pic" >
                                 


                                    <input type="submit" value="ADD" name="button">
</div>

</div>
</div>
</div>
 
@endsection