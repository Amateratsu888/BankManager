@extends('welcome')
@section('content')


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un personnel
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

    <form method="post" action="{{url('personnel.save')}}">
      @csrf
      <div class="form-group">
        <label for="prénom">Nom complet:</label>
        <input type="text" class="form-control" name="nom_complet" />
      </div><br>
      <div class="form-group">
        <label for="prénom">Telephone:</label>
        <input type="text" class="form-control" name="telephone" />
      </div><br>
      <div class="form-group">
        <label for="prénom">Numero passport:</label>
        <input type="text" class="form-control" name="numero_passport" />
      </div><br>
      <div class="form-group">
        <label for="prénom">Date de naissance:</label>
        <input type="date" class="form-control" name="date_de_naissance" />
      </div><br>
      <div class="form-group">
        <label for="prénom">Civilité:</label><br>
        <input type="radio" id="cel"  value="celibataire" name="civilite">
        <label for="cel">celilbataire</label><br>
        <input type="radio" id="marie"  value="marie" name="civilite">
        <label for="css">Marié</label><br>   
      </div><br>
      <div class="form-group">
        <label for="prénom">Sexe:</label><br>
        <input type="radio" id="man"  value="man" name="sexe">
        <label for="man">masculin</label><br>
        <input type="radio" id="woman"  value="woman" name="sexe">
        <label for="woman">Féminin</label><br>   
      </div><br>
      <div class="form-group">
        <label for="address">Adresse personnel:</label>
        <input type="text" class="form-control" name="addres_personnel" />
      </div><br>
      <div class="form-group">
      <label for="address">Ville:</label>
        <select name="ville_id" id="ville">
        @foreach ($ville as $v)
        <option value="{{ $v->id }}">{{ $v->nom_ville }}</option>
        @endforeach
        </select>
      </div><br>
      <div class="form-group">
      <label for="address">Bank:</label>
        <select name="bank_id" id="ville">
        @foreach ($bank as $b)
        <option value="{{ $b->id }}">{{ $b->nom_bank }}</option>
        @endforeach
        </select>
      </div><br>
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
  </div>
</div>

<h4 class="text-center mt-4">Liste des banks</h4>
<table class="table">
  <tr>
    <th>ID</th>
    <th>Nom compet</th>
    <th>Ville</th>
    <th>adresse</th>
    <th>Bank</th>
    <th>Telephone</th>
    <th>date de naissance</th>
    <th>civilité</th>
    <th>Sexe</th>
  </tr>

  @foreach ($personnel as $p)
  <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->nom_complet }}</td>
    <td>{{ $p->ville_id}}</td>
    <td>{{ $p->addres_personnel }}</td>
    <td>{{ $p->bank_id}}</td>
    <td>{{ $p->telephone}}</td>
    <td>{{ $p->date_de_naissance}}</td>
    <td>{{ $p->civilite}}</td>
    <td>{{ $p->sexe}}</td>
    <td>
      <a href="{{ route('personnel.delete',$p->id) }}" class="btn btn-danger">supprimer</a>
      <a href="{{ route('edit.personnel',$p->id) }}" class="btn btn-warning">Edit</a>

    </td>
  </tr>
  @endforeach
</table>
@endsection