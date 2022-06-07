@extends('welcome')

@section('content')
<div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4>Editer {{ $bank->nom_bank }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('update.bank',$bank->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom bank</label>
                    <input type="text" name="nom_bank" class="form-control" value="{{ $bank->nom_bank }}">
                </div>
                <div class="form-group">
                    <label for="">Numéro compte</label>
                    <input type="text" name="numero_bank" class="form-control" value="{{ $bank->numero_compte }}">
                </div>
                <button class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection