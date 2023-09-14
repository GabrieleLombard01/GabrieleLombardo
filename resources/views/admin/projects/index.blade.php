@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="container">
        <h2 class="fw-bold text-secondary my-4">
            Progetti:
        </h2>
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

                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-dark">
                                                <a class="text-decoration-none" href="#"><i
                                                        class="fa-solid fa-trash-can fw-bold text-white"></i></a>
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
            </div>
        </div>
    </div>
@endsection
