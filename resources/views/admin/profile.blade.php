@extends('layouts.admin')

@section('page-title', 'Profilo')

@section('content')
    <h4 class="mb-4">Il tuo profilo</h4>

    <div class="card border-0 shadow-sm" style="max-width: 500px;">
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted small">Nome</label>
                <p class="fw-semibold mb-0">{{ Auth::user()->name }}</p>
            </div>
            <hr>
            <div>
                <label class="form-label text-muted small">Email</label>
                <p class="fw-semibold mb-0">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
@endsection
