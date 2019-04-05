@extends('index')

@section('content')
<div>

<div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">id_pfe</th>
      <th scope="col">message</th>
      <th scope="col">cv</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($stagiaire as $stagiaire)
    <tr>
      <th scope="row">{{$stagiaire->id}}</th>
      <td>{{$stagiaire->nom}}</td>
      <td>{{$stagiaire->prenom}}</td>
      <td>{{$stagiaire->email}}</td>
      <td>{{$stagiaire->id_pfe}}</td>
      <td>{{$stagiaire->msg}}</td>
      <td>{{$stagiaire->cv}}</td>
      <td>
      <a href='/modifier/{{$stagiaire->id}}' class='fas fa-redo' style='font-size:10px;color:red'></a>

      <a href='/afficher/{{$stagiaire->id}}' class='fas fa-share' style='font-size:10px;color:red'> </a>
      <a  href='/effacer/{{$stagiaire->id}}' class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#delete" style='font-size:10px'></a>
      </td>

      <div class="modal"  id="delete"  tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>supprimer {{$stagiaire->nom}}????????????</p>
            </div>
            <div class="modal-footer">
            <a href='/effacer/{{$stagiaire->id}}' class='btn btn-primary'>delete</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
            </div>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div>
<form action='/ajouter'>
<input type="submit" class="btn btn-primary" value='ajouter'>
</form>
</div>
</div>
@endsection