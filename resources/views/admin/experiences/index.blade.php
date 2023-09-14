@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold text-secondary my-4">
                Esperienze:
            </h2>
            <a class="btn btn-outline-secondary text-decoration-none fw-bold" href="{{ url('admin/cv') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna in dietro</a>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Qualifica</th>
                            <th scope="col">Luogo</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Ultima modifica</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($experiences as $experience)
                            <tr>
                                <th scope="row">{{ $experience->id }}</th>
                                <td>{{ $experience->title }}</td>
                                <td>{{ $experience->qualification }}</td>
                                <td>{{ $experience->location }}</td>
                                <td>{{ $experience->created_at }}</td>
                                <td>{{ $experience->updated_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.experiences.show', $experience) }}"><i
                                                class="fa-solid fa-eye fw-bold text-white"></i></a>
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('admin.experiences.edit', $experience) }}"><i
                                                class="fa-solid fa-pen-to-square fw-bold text-white"></i></a>
                                        <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST">
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
                                    <h3>Nessuna esperienza :(</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
