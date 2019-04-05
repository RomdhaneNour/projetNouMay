@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div> <a href='/gestionpfe' class="	fas fa-arrow-left"></a></div>
                <div class="card-header">afficher details</div>

                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

      
        <div class="form-group">
        
        <h1 style='color:red'>{{$pFE->titre}}</h1>
        </div>
        <div class="form-group">
        <h4>{{$pFE->sujet}}</h4>
        </div>
        <div class="form-group">
        <h5>periode: {{$pFE->periode}} mois</h5>
        </div>
        <div class="form-group">
        <h5>nombre de stagiaire :{{$pFE->nb_stagiaire}}</h5>
        </div>

       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection