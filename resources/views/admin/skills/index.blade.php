@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold my-4">
                Competenze:
            </h2>
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/cv') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Ultima modifica</th>
                            <th><a class=" btn btn-sm btn-success float-end fw-bold "
                                    href="{{ route('admin.skills.create') }}"><i class="fa-solid fa-plus fa-xl"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($skills as $skill)
                            <tr>
                                <th scope="row">{{ $skill->id }}</th>
                                <td>{{ $skill->title }}</td>
                                <td>{{ $skill->created_at }}</td>
                                <td>{{ $skill->updated_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.skills.show', $skill) }}"><i
                                                class="fa-solid fa-eye fw-bold text-white"></i></a>
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.skills.edit', $skill) }}"><i
                                                class="fa-solid fa-pen-to-square fw-bold text-white"></i></a>
                                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST"
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
                                <td class="text-center" colspan="7">
                                    <h3>Nessuna esperienza :(</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if ($skills->hasPages())
                    {{ $skills->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
