@extends("layouts.projects")

@section("title", "Aggiungi un progetto")

@section("content")
<div class="container py-4">
    <h2 class="mb-4">Crea un nuovo progetto</h2>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="client" class="form-label">Nome Cliente</label>
            <input type="text" name="client" id="client" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Durata Progetto</label>
            <input type="date" name="period" id="period" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo di tecnologia usata:</label>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control-mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
            <div class="tag me-2">
                <input type="checkbox" name="technology[]" value="{{ $technology->id }}" id="technology-{{ $technology->id }}">
                <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
            </div>
                
            @endforeach
        </div>


        <div class="mb-4">
            <label for="summary" class="form-label">Riassunto Progetto</label>
            <textarea name="summary" id="summary" rows="5" class="form-control" placeholder="Descrizione breve del progetto..." required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Salva Progetto</button>
    </form>
</div>
@endsection
