@extends('layouts.projects')

@section('title', 'tutte le tecnologie')

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-primary" href="{{ route('types.create') }}">Nuovo Progetto</a>
   
</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->name }}</td>
                <td>{{ $type->slug }}</td>
                <td>{{ $type->category }}</td>
                <td>
                    <a href="{{ route("types.show", $type->id) }}">Visualizza</a>
                </td>
            </tr>
             @endforeach
        </tbody>

    </table>
@endsection
