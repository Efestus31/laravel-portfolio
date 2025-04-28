@extends('layouts.projects')

@section('title', $project->title)

@section('content')
    <div class="d-flex py-4 gap-2">
        <a class="btn btn btn-outline-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
    </div>


    <div class="mb-4">
        <h2 class="mb-3">
            - {{ $project->name }}
        </h2>
    
        <ul class="list-unstyled mb-4">
            <li><strong>Cliente:</strong> {{ $project->client }}</li>
            <li><strong>Periodo:</strong> {{ $project->period }}</li>
            <li><strong>Categoria:</strong> {{ $project->type->name }}</li>
        </ul>
    
        <section>
            <h5>Riassunto</h5>
            <p class="text-muted">
                {{ $project->summary }}
            </p>
        </section>
    </div>
    
    <!-- Modal -->
    <div class="modal fade modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il Progetto!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vuoi eliminare il progetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-warning btn-outline" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
