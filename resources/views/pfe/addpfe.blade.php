@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div> <a href='/gestionpfe' class="	fas fa-arrow-left"></a></div>
                <div class="card-header">ajout</div>

                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

                    <form action='/ajout' method='POST' name="f">
        @csrf
        
        <div class="form-group">
    <label for="exampleFormControlInput1">titre</label>
    <input type="text" class="form-control"  placeholder="inserer titre" name='titre'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">sujet</label>
    <textarea class="form-control"  rows="3" name='sujet'></textarea>
  </div>
  
  <div class="form-check">
  <label for="exampleFormControlTextarea1">nombre stagiaire</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="nbpfe" id="rd1" value="1" >
  <label class="form-check-label" for="exampleRadios1">
    1
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="nbpfe" id="rd2" value="2">
  <label class="form-check-label" for="exampleRadios2">
   2
  </label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">mois</label>
    <select class="form-control" id="exampleFormControlSelect1" name='liste'>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
  </div>
<input type="submit" class="btn btn-primary" value='ajouter'></button>

  

</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection