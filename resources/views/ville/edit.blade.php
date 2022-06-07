@extends('welcome')

@section('content')
<div>

<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editer   {{ $ville->nom_ville }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('update.ville',$ville->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom Ville</label>
                <input type="text" name="nom_ville" class="form-control" value="{{ $ville->nom_ville }}">
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection
