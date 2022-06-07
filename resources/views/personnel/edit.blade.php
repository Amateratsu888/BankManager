@extends('welcome')

@section('content')
<div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4>Editer {{ $personnel->nom_complet }}</h4>
        </div><br>
        <div class="card-body">
            <form action="{{ route('update.personnel',$personnel->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="prénom">Nom complet:</label>
                    <input value="{{ $personnel->nom_complet }}" type="text" class="form-control" name="nom_complet" />
                </div><br>
                <div class="form-group">
                    <label for="prénom">Telephone:</label>
                    <input  value="{{ $personnel->telephone }}" type="text" class="form-control" name="telephone" />
                </div><br>
                <div class="form-group">
                    <label for="prénom">Numéro passport:</label>
                    <input  value="{{ $personnel->numero_passport }}" type="text" class="form-control" name="numero_passport" />
                </div><br>
                <div class="form-group">
                    <label for="prénom">Date de naissance:</label>
                    <input  value="{{ $personnel->date_de_naissance }}" type="text" class="form-control" name="date_de_naissance" />
                </div><br>
                <div class="form-group">
                    <label for="prénom">Civilité:</label><br>
                    <input type="radio" id="cel" value="celibataire" name="civilite">
                    <label for="cel">celilbataire</label><br>
                    <input type="radio" id="marie" value="marie" name="civilite">
                    <label for="css">Marié</label><br>
                </div><br>
                <div class="form-group">
                    <label for="prénom">Sexe:</label><br>
                    <input type="radio" id="man" value="man"  name="sexe">
                    <label for="man">masculin</label><br>
                    <input type="radio" id="woman" value="woman" name="sexe">
                    <label for="woman">Féminin</label><br>
                </div><br>
                <div class="form-group">
                    <label for="address">Adresse personnel:</label>
                    <input  value="{{ $personnel->addres_personnel }}" type="text" class="form-control" name="addres_personnel" />
                </div><br>
                <div class="form-group">
                    <label for="address">Ville:</label><br>
                    <select name="ville_id" id="ville">
                        @foreach ($ville as $v)
                        <option value="{{ $v->id }}">{{ $v->nom_ville }}</option>
                        @endforeach
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="address">Bank:</label><br>
                    <select name="bank_id" id="ville">
                        @foreach ($bank as $b)
                        <option value="{{ $b->id }}">{{ $b->nom_bank }}</option>
                        @endforeach
                    </select>
                </div><br>
                <button class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection