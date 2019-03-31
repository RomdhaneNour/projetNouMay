@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion projet</div>
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
                   
                    Gestion des projets
                    <table class="table" >
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix total</th>
        <th scope="col">Date de début</th>
        <th scope="col">Date de fin</th>
        <th scope="col">Domaine</th>
      </tr>
    </thead>
    <tbody>
  
    @foreach ($projets as $projets)
      <tr>
        <th scope="row">{{$projets->id}}</th>
        <td>{{$projets->quantite}}</td>
        <td>{{$projets->prixtotal}}</td>
        <td>{{$projets->datedebut}}</td>
        <td>{{$projets->datefin}}</td>
        <td>{{$projets->domaine}}</td>
        <td><a href='/updateprojet/{{$projets->id}}' class='fas fa-check'>Update</td>
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
        Are you sure to delete this project ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
       <a class="btn btn-primary" href='/deleteproject/{{$projets->id}}' role="button">yes</a>
      </div>
    </div>
  </div>
</div>
      </tr>
      @endforeach
      </tbody>
      </table>
      <a href="/newprojet" class="fas fa-flag">New projet</a>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection