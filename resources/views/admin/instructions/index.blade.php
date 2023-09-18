@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="container">
        @include('includes.layout.alerts')

        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold my-4">
                Istruzione:
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
                            <th scope="col">Corso di studi</th>
                            <th scope="col">Qualifica di studio</th>
                            <th scope="col">Valutazione</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Ultima modifica</th>
                            <th><a class=" btn btn-sm btn-success float-end fw-bold "
                                    href="{{ route('admin.instructions.create') }}"><i
                                        class="fa-solid fa-plus fa-xl"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($instructions as $instruction)
                            <tr>
                                <th scope="row">{{ $instruction->id }}</th>
                                <td>{{ $instruction->title }}</td>
                                <td>{{ $instruction->course_study }}</td>
                                <td>{{ $instruction->qualification_study }}</td>
                                <td>{{ $instruction->valuation }}</td>
                                <td>{{ $instruction->created_at }}</td>
                                <td>{{ $instruction->updated_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.instructions.show', $instruction) }}"><i
                                                class="fa-solid fa-eye fw-bold text-white"></i></a>
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.instructions.edit', $instruction) }}"><i
                                                class="fa-solid fa-pen-to-square fw-bold text-white"></i></a>
                                        <form action="{{ route('admin.instructions.destroy', $instruction) }}"
                                            method="POST" class="delete-form">
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
                                <td class="text-center" colspan="8">
                                    <h3>Nessuna istruzione :(</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if ($instructions->hasPages())
                    {{ $instructions->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
