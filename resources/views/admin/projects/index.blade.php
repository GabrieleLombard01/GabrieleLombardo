@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
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
