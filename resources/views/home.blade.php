@extends('layouts.app')

@section('content')
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">Bank Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('ville.index') }}">Ville </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('fonction.index') }}">Fonction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bank.index') }}">Bank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('personnel.index') }}">Personnel</a>
      </li>
    </ul>
  </div>
</nav>
</div>
@endsection
