@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Update service</div>
                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

                            <div class="card-body">
                <form name='n' method='GET' action='/editservice/{{$service->id}}'>
                @csrf
  <div class="form-group">
    <input type="text" name="name" class="form-control" value='{{$service->name}}'>
  </div>
  <div class="form-group">  
    <input type="text" name="description" class="form-control" value ='{{$service->description}}' >
  </div>
  <div class="form-group">
    <input type="text" name="pic" class="form-control" value='{{$service->pic}}'>
  </div>
  
  <input type="submit" class="btn btn-outline-primary" value='update'>
</form>
     
         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
