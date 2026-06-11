@extends('layouts.admin')

@section('page-title', 'Pannello')

@section('content')
    <h4 class="mb-4">Benvenuto, {{ Auth::user()->name }}!</h4>

    <div class="row g-3">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="bg-primary bg-opacity-10 text-primary rounded p-3">
                        <i class="bi bi-file-earmark-text fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Progetti</div>
                        <div class="fw-bold fs-5">{{ $projectsCount }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="bg-success bg-opacity-10 text-success rounded p-3">
                        <i class="bi bi-tags fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Tecnologie</div>
                        <div class="fw-bold fs-5">{{ $categoriesCount }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
