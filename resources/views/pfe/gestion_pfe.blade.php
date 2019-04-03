@extends('index')

@section('content')
<div>

<div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">sujet</th>
      <th scope="col">periode</th>
      <th scope="col">nb stagiaire</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pfe as $pfe)
    <tr>
      <th scope="row">{{$pfe->id}}</th>
      <td>{{$pfe->titre}}</td>
      <td>{{$pfe->sujet}}</td>
      <td>{{$pfe->periode}} mois</td>
      <td>{{$pfe->nb_stagiaire}}</td>
      <td>
      <a href='/update/{{$pfe->id}}' class='fas fa-redo' style='font-size:10px;color:red'></a>

      <a href='/show/{{$pfe->id}}' class='fas fa-share' style='font-size:10px;color:red'> </a>
      <a  href='/deletePfe/{{$pfe->id}}' class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#delete" style='font-size:10px'></a>
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
            <p>supprimer {{$pfe->id}}????????????</p>
            </div>
            <div class="modal-footer">
            <a href='/deletePfe/{{$pfe->id}}' class='btn btn-primary'>delete</a>
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
<form action='/addpfe'>
<input type="submit" class="btn btn-primary" value='ajouter'>
</form>
</div>
</div>
@endsection