@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div> <a href='/geststagiaire' class="	fas fa-arrow-left"></a></div>
                <div class="card-header">afficher details</div>

      
        <div class="form-group">
        
        <p><h5>nom et prenom: </h5>{{$stagiaire->nom}} {{$stagiaire->prenom}}</p>
        </div>
        <div class="form-group">
        <p><h5>email:</h5>{{$stagiaire->email}}</p>
        </div>
        <div class="form-group">
        <p><h5>message:<h5>{{$stagiaire->msg}}</p>
        </div>
        <div class="form-group">
        <p><h5>cv:<h5>{{$stagiaire->cv}}</p>
        </div>
        <div class="form-group">
        <p>le stage pfe N° {{$stagiaire->id_pfe}}</p>
        </div>
       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection