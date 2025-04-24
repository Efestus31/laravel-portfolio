@extends('layouts.projects')

@section('title', $project->title)

@section('content')
    <div class="mb-4">
        <h2>
            - {{ $project->name }}
        </h2>
        <small>
            {{ $project->period }}
        </small>
        <section>
            <p>
                {{ $project->summary }}
            </p>
        </section>
    </div>

@endsection
