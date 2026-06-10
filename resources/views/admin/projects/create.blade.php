@extends("layouts.admin")

@section("title", "Aggiungi un progetto")

@section("content")

<div class="mb-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
            &otimes; Annulla
        </a>
    </div>

<form action="{{ route("admin.projects.store") }}" method="POST" class="card shadow-sm">
    @csrf

    <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Aggiungi un progetto</h5>
        </div>

    <div class="form-control  d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" class="mb-3">
    
        <label for="client">Cliente</label>
        <input type="text" name="client" id="client" class="mb-3">
    
        <label for="period">Periodo</label>
        <input type="text" name="period" id="period" class="mb-3">
    
        <label for="title">Descrizione</label>
        <textarea type="text" name="description" id="description" width="100%" rows="4" class="mb-3"></textarea>
        

        <input type="submit" value="Salva" class="btn btn-sm btn-outline-primary mb-3">
    </div>


</form>

@endsection