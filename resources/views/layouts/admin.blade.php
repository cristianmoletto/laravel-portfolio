<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            <nav class="col-2 bg-dark min-vh-100 d-flex flex-column p-3">
                <a href="{{ route('admin.index') }}" class="text-white text-decoration-none mb-4 d-flex align-items-center gap-2">
                    <i class="bi bi-layers fs-5"></i>
                    <span class="fw-semibold fs-5">Admin</span>
                </a>

                <hr class="border-secondary mt-0">

                <ul class="nav nav-pills flex-column gap-1">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                           class="nav-link link-light {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                            <i class="bi bi-speedometer2 me-2"></i> Analytics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.projects.index') }}"
                           class="nav-link link-light {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                            <i class="bi bi-folder me-2"></i> Progetti
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.profile') }}"
                           class="nav-link link-light {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                            <i class="bi bi-person me-2"></i> Profilo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=""
                           class="nav-link link-light {{ request()->routeIs('') ? 'active' : '' }}">
                            <i class="bi bi-book me-2"></i> Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=""
                           class="nav-link link-light {{ request()->routeIs('') ? 'active' : '' }}">
                            <i class="bi bi-bookmarks me-2"></i> Tags
                        </a>
                    </li>
                </ul>

                <div class="mt-auto">
                    <hr class="border-secondary">
                    <p class="text-secondary small mb-2">
                        <i class="bi bi-person-circle me-1"></i> 
                        {{ Auth::user()->name }}
                    </p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary w-100">
                            <i class="bi bi-box-arrow-left me-1">
                            </i> Logout
                        </button>
                    </form>
                </div>
            </nav>

            {{-- Main content --}}
            <div class="col-10 d-flex flex-column min-vh-100 bg-light p-0">

                {{-- Top bar --}}
                <nav class="navbar bg-white shadow-sm px-4 py-2">
                    <span class="fw-semibold text-muted">
                        @yield('page-title', 'Dashboard')
                    </span>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary ms-auto">
                        <i class="bi bi-globe me-1"></i> Vai al sito
                    </a>
                </nav>

                {{-- Page content --}}
                <main class="p-4 flex-grow-1">
                    @yield('content')
                </main>

            </div>

        </div>
    </div>
</body>

</html>
