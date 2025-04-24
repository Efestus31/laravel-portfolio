@extends('layouts.projects')

@section("title", "Modifica un progetto")

@section("content")
    <form action="{{ route("projects.update", $project) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome Progetto:</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="client">Nome Cliente:</label>
            <input type="text" name="client" id="client" value="{{ $project->client }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="period">durata Progetto:</label>
            <input type="date" name="period" id="period" value="{{ $project->period }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="summary">Riassunto Progetto:</label>
            <textarea name="summary" id="summary" rows="5" >{{ $project->summary }}</textarea>
        </div>
        <input type="submit" value="Salva">
    </form>
@endsection