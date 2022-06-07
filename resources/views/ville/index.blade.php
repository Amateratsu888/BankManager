@extends('welcome')
@section('content')


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter une ville
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="post" action="{{url('ville.save')}}">
        @csrf
          <div class="form-group">
              <label for="prénom">Nom ville:</label>
              <input type="text" class="form-control" name="nom ville"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>

<h4 class="text-center mt-4">Liste des villes</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom Ville</th>
      </tr>

      @foreach ($ville as $v )
      <tr>
          <td>{{ $v->id }}</td>
          <td>{{ $v->nom_ville }}</td>
          <td>
              <a href="{{ route('ville.delete',$v->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('edit.ville',$v->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>
@endsection

