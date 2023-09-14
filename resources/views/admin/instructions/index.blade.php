@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-4 text-secondary my-4">
                Istruzione:
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
                            <th scope="col">Corso di studi</th>
                            <th scope="col">Qualifica di studio</th>
                            <th scope="col">Valutazione</th>
                            <th scope="col">Creato il</th>
                            <th scope="col">Ultima modifica</th>
                            <th></th>
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
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6">
                                    <h3>Nessuna istruzione :(</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
