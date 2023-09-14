@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                Esperienze:
            </h2>
            <button><a href="{{ url('admin/cv') }}">Torna in dietro</a></button>
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
