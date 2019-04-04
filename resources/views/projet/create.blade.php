@extends('index')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add projet</div>

                 @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif
                            <form class="form-horizontal"  method="GET" action="/addprojet">
                            @csrf
                                     <label for="quantite" class="col-md-4 control-label">Quantite</label>
                                    <input  type="integer" class="form-control" name="quantite">
                                    <label for="prix" class="col-md-4 control-label">Prix total</label>
                                    <input  type="float" class="form-control" name="prixtotal">
                                    <label for="datedebut" class="col-md-4 control-label">date de début</label>
                                    <input type="date" class="form-control" name="datedebut" >
                                    <label for="datefin" class="col-md-4 control-label">date de fin</label>
                                    <input type="date" class="form-control" name="datefin" >
                                    <label for="domaine" class="col-md-4 control-label">Domaine</label>
                                    <input  type="text" class="form-control" name="domaine">


                                    <input type="submit" value="ADD" name="button">
</div>

</div>
</div>
</div>
 
@endsection