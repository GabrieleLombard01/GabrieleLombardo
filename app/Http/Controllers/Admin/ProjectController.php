<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('updated_at', 'DESC')->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:50|unique:projects',
                'content' => 'required|string',
                'image' => 'nullable|url'
            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'content.required' => 'Attenzione! Non può esistere un progetto senza contenuto',

                'image.url' => "Attenzione! L'url inserito non è valido"
            ]
        );

        $data = $request->all();

        $project = new Project();

        $project->fill($data);

        $project->slug = Str::slug($project->title, '-');

        $project->save();

        return to_route('admin.projects.show', $project)->with('alert-type', 'success')->with('alert-message', "Progetto inserito con successo!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate(
            [
                'title' => ['required', 'string', 'max:50', Rule::unique('projects')->ignore($project->id)],
                'content' => 'required|string',
                'image' => 'nullable|url'
            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'content.required' => 'Attenzione! Non può esistere un progetto senza contenuto',

                'image.url' => "Attenzione! L'url inserito non è valido"
            ]
        );

        $data = $request->all();

        $project->slug = Str::slug($project->title, '-');

        $project->update($data);

        $project->save();

        return to_route('admin.projects.show', $project)->with('alert-message', 'Progetto modificato con successo!')->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('admin.projects.index')
            ->with('toast-message', "Progetto eliminato con successo!")
            ->with('toast-button-label', 'Annulla')
            ->with('toast-method', 'PATCH')
            ->with('toast-route', route('admin.projects.restore', $project->id));
    }

    public function restore(string $id)
    {

        $project = Project::onlyTrashed()->findOrFail($id);

        $project->restore();

        return to_route('admin.projects.index')
            ->with('alert-type', 'success')
            ->with('alert-message', 'Progetto ripristinato con successo!');
    }
}
