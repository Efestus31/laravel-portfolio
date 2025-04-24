@extends('layouts.projects')

@section('title', 'tutti i progetti')

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-proimary btn-outline" href="{{ route('projects.create', $project) }}">Nuovo Progetto</a>
   
</div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Durata</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client }}</td>
                <td>{{ $project->period }}</td>
                <td>
                    <a href="{{ route("projects.show", $project->id) }}">Visualizza</a>
                </td>
            </tr>
             @endforeach
        </tbody>

    </table>
@endsection
