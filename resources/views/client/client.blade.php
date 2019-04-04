@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion client</div>
                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <br>
                   
                    Gestion des clients
                    <table class="table" >
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">CIN</th>
        <th scope="col">email</th>
        
      </tr>
    </thead>
    <tbody>
  
    @foreach ($clients as $clients)
      <tr>
        <th scope="row">{{$clients->id}}</th>
        <td>{{$clients->name}}</td>
        <td>{{$clients->CIN}}</td>
        <td>{{$clients->email}}</td>
        <td><a href='/updateclient/{{$clients->id}}' class=' fas fa-check'>Update</td>
       <td> <button type="button" data-toggle="modal" data-target="#delete" class="fa fa-trash">Delete</button></td>
       
<div class="modal" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Are you sure to delete ?</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>            
      </div>
      <div class="modal-body">
        Are you sure to delete this client ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
       <a class="btn btn-primary" href='/deleteclient/{{$clients->id}}' role="button">yes</a>
      </div>
    </div>
  </div>
</div>
      </tr>
      @endforeach
      </tbody>
      </table>
      <a href="/newclient" class="fas fa-flag">New client</a>    
      
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

@endsection