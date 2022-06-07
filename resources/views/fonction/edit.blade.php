@extends('welcome')

@section('content')
<div>

<div class="card">
    <div class="card-header bg-dark text-white">
        <h4>Editer   {{ $fonction->nom_fonction }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('update.fonction',$fonction->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom fonction</label>
                <input type="text" name="nom_fonction" class="form-control" value="{{ $fonction->nom_fonction }}">
            </div>
            <button class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>
</div>
@endsection
