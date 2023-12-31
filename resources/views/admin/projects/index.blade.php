@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <div class="container">
        <header class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold my-4">Progetti:</h2>
            <a class="btn btn-outline-primary fw-bold" href="{{ route('admin.projects.create') }}">Crea un nuovo progetto</a>
        </header>


        <div class="row justify-content-center">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Ultima modifica</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td>{{ $project->updated_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.projects.show', $project) }}"><i
                                                class="fa-solid fa-eye fw-bold text-white"></i></a>
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.projects.edit', $project) }}"><i
                                                class="fa-solid fa-pen-to-square fw-bold text-white"></i></a>

                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                            class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-primary">
                                                <span class="text-decoration-none"><i
                                                        class="fa-solid fa-trash-can fw-bold text-white"></i></span>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6">
                                    <h3>Nessun progetto :(</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if ($projects->hasPages())
                    {{ $projects->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
