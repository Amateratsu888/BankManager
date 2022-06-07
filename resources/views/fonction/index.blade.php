@extends('welcome')
@section('content')


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter une fonction
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

    <form method="post" action="{{url('fonction.save')}}">
        @csrf
          <div class="form-group">
              <label for="prénom">Nom fonction:</label>
              <input type="text" class="form-control" name="nom fonction"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>

<h4 class="text-center mt-4">Liste des fonctions</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom fonction</th>
      </tr>

      @foreach ($fonction as $v )
      <tr>
          <td>{{ $v->id }}</td>
          <td>{{ $v->nom_fonction }}</td>
          <td>
              <a href="{{ route('fonction.delete',$v->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('edit.fonction',$v->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>
@endsection

