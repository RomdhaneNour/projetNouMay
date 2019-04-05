@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div> <a href='/stagiaire' class="	fas fa-arrow-left"></a></div>
                <div class="card-header">modifier</div>

                @if(Session::has('message')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                                    <strong>{{Session::get('message') }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                            @endif

    <form action='/edit/{{$stagiaire->id}}' method='POST' name="f">
        @csrf
        
        <div class="form-group">
    <label for="exampleFormControlInput1">nom:</label>
    <input type="text" class="form-control"  value="{{$stagiaire->nom}}" name='nom'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">prenom:</label>
    <input type="text" class="form-control"  value="{{$stagiaire->prenom}}" name='prenom'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">email:</label>
    <input type="email" class="form-control"  value="{{$stagiaire->email}}" name='email'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">message:</label>
    <textarea class="form-control"  rows="3" name='msg'>{{$stagiaire->msg}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">id_PFE:</label>
    <select class="form-control" id="exampleFormControlSelect1" name='pfe'>
        @foreach($pfe as $pfe)
      <option>{{$pfe->id}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">cv:</label>
    <input type="text" class="form-control"  value="{{$stagiaire->cv}}" name='cv'>
  </div>
<input type="submit" class="btn btn-primary" value='modifier'></button>

  

</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection