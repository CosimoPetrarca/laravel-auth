@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4"> I miei Progetti</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Data inizio</th>
                <th scope="col">Data fine</th>
                <th scope="col">Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->title }}</th>
                <td>{{ $project->description }}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>
                <td>{{ $project->slug }}</td>
                <td><a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary btn-sm">Dettaglio</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection