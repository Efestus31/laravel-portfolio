@extends('layouts.projects')

@section("title", "Nuova tecnologia")



@section("content")
<div class="container py-4">
    <h2 class="mb-4">aggiungi tecnologia:</h2>

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome tecnologia</label>
            <input type="text" name="name" id="name" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Diminutivo tecnologia</label>
            <input type="text" name="slug" id="slug" class="form-control"  required>
        </div>

        <div class="mb-4">
            <label for="category" class="form-label">Categoria Tecnologia</label>
            <textarea name="category" id="category" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva tecnologia</button>
    </form>
</div>
@endsection