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
        <div class="d-flex py-2 gap-2">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-primary">
                &#9998; Modifica
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                &times; Elimina
            </button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vuoi eliminare il progetto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{ route("admin.projects.destroy",$project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
                </form>
            </div>
        </div>
    </div>
</div>


@endsection