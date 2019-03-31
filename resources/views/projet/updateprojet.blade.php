@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Update project</div>
                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

                            <div class="card-body">
                <form name='n' method='GET' action='/editprojet/{{$projet->id}}'>
                @csrf
  <div class="form-group">
    <input type="text" name="quantite" class="form-control" value='{{$projet->quantite}}'>
  </div>
  <div class="form-group">  
    <input type="text" name="prixtotal" class="form-control" value ='{{$projet->prixtotal}}' >
  </div>
  <div class="form-group">
    <input type="date" name="datedebut" class="form-control" value='{{$projet->datedebut}}'>
  </div>
  <div class="form-group">
    <input type="date" name="datefin" class="form-control" value='{{$projet->datefin}}'>
  </div>
  <div class="form-group">
    <input type="text" name="domaine" class="form-control" value='{{$projet->domaine}}'>
  </div>
  <input type="submit" class="btn btn-outline-primary" value='update'>
</form>
     
         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
