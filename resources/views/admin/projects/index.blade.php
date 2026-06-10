@extends('layouts.admin')

@section('page-title', 'Progetti')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Elenco Progetti</h4>
    </div>

    @if ($projects->isEmpty())
        <div class="alert alert-info">Nessun progetto presente.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white shadow-sm rounded">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Titolo</th>
                        <th>Cliente</th>
                        <th>Periodo</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->client }}</td>
                            <td>{{ $project->period }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-outline-primary">
                                    Maggiori info &#8594;
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
