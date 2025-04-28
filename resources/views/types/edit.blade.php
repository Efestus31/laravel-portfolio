@extends('layouts.projects')

@section("title", "Modifica una Tecnologia")

@section("content")
<div class="container py-4">
    <h2 class="mb-4">Modifica tecnologia: <strong>{{ $type->name }}</strong></h2>

    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $type->name }}" required>
        </div>

        <div class="mb-4">
            <label for="category" class="form-label">Categoria:</label>
            <textarea name="category" id="category" rows="5" class="form-control" required>{{ $type->category }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Aggiorna Tecnologia</button>
    </form>
</div>
@endsection
