@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <h2 class="fs-4 text-secondary my-4">Benvenuto, {{ $user->name }}</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Informazioni Utente</div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Registrato il:</strong> {{ $user->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
