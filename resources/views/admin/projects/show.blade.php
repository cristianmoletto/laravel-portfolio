@extends('layouts.admin')

@section('page-title', 'Dettaglio Progetto')

@section('content')

    <div class="mb-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
            &larr; Torna all'elenco
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">{{ $project->title }}</h5>
        </div>
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-2">Cliente</dt>
                <dd class="col-sm-10">{{ $project->client }}</dd>

                <dt class="col-sm-2">Periodo</dt>
                <dd class="col-sm-10">{{ $project->period }}</dd>

                <dt class="col-sm-2">Descrizione</dt>
                <dd class="col-sm-10">{{ $project->description }}</dd>
            </dl>
        </div>
    </div>

@endsection
