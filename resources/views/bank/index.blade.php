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

    <form method="post" action="{{url('bank.save')}}">
        @csrf
          <div class="form-group">
              <label for="prénom">Nom bank:</label>
              <input type="text" class="form-control" name="nom bank"/>
          </div>
          <div class="form-group">
              <label for="prénom">Numero compte:</label>
              <input type="text" class="form-control" name="numero compte"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>

<h4 class="text-center mt-4">Liste des banks</h4>
  <table class="table">
      <tr>
          <th>ID</th> <th>Nom bank</th> <th>Numero compte</th>
      </tr>

      @foreach ($bank as $v )
      <tr>
          <td>{{ $v->id }}</td>
          <td>{{ $v->nom_bank }}</td>
          <td>{{ $v->numero_compte }}</td>
          <td>
              <a href="{{ route('bank.delete',$v->id) }}" class="btn btn-danger">supprimer</a>
              <a href="{{ route('edit.bank',$v->id) }}" class="btn btn-warning">Edit</a>

          </td>
      </tr>
      @endforeach
  </table>
@endsection

