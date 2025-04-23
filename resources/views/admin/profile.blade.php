@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">Profilo utente</h2>
        <p>Benvenuto, {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
    </div>
@endsection