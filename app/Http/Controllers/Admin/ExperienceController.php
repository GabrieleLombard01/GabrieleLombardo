<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $experience = new Experience();
        return view('admin.experiences.create', compact('experience'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:50|unique:experiences',
                'description' => 'required|string',
                'image' => 'nullable|url',
                'qualification' => 'required|string|max:50',
                'contract' => 'required|string|max:80',
                'location' => 'required|string|max:80',
                'start_date' => 'required|date',
                'end_date' => 'required|date',

            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'description.required' => "Attenzione! Non può esistere un'esperienza senza contenuto",

                'image.url' => "Attenzione! L'url inserito non è valido",

                'qualification.required' => 'Attenzione! La qualifica è obbligatoria',
                'qualification.max' => 'Attenzione! La qualifica deve essere lunga massimo :max caratteri',

                'contract.required' => 'Attenzione! Il contratto è obbligatorio',
                'contract.max' => 'Attenzione! Il contratto deve essere lungo massimo :max caratteri',

                'location.required' => 'Attenzione! Il luogo è obbligatorio',
                'location.max' => 'Attenzione! Il luogo deve essere lungo massimo :max caratteri',

                'start_date.required' => "Attenzione! L'inizio è obbligatorio",

                'end_date.required' => 'Attenzione! La fine è obbligatoria',
            ]
        );

        $data = $request->all();

        $experience = new Experience();

        $experience->fill($data);

        $experience->save();

        return to_route('admin.experiences.show', $experience)->with('alert-type', 'success')->with('alert-message', "Esperienza inserita con successo!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('admin.experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate(
            [
                'title' => ['required', 'string', 'max:50', Rule::unique('projects')->ignore($experience->id)],
                'description' => 'required|string',
                'image' => 'nullable|url',
                'qualification' => 'required|string|max:50',
                'contract' => 'required|string|max:80',
                'location' => 'required|string|max:80',
                'start_date' => 'required|date',
                'end_date' => 'required|date',

            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'description.required' => "Attenzione! Non può esistere un'esperienza senza contenuto",

                'image.url' => "Attenzione! L'url inserito non è valido",

                'qualification.required' => 'Attenzione! La qualifica è obbligatoria',
                'qualification.max' => 'Attenzione! La qualifica deve essere lunga massimo :max caratteri',

                'contract.required' => 'Attenzione! Il contratto è obbligatorio',
                'contract.max' => 'Attenzione! Il contratto deve essere lungo massimo :max caratteri',

                'location.required' => 'Attenzione! Il luogo è obbligatorio',
                'location.max' => 'Attenzione! Il luogo deve essere lungo massimo :max caratteri',

                'start_date.required' => "Attenzione! L'inizio è obbligatorio",

                'end_date.required' => 'Attenzione! La fine è obbligatoria',
            ]
        );

        $data = $request->all();

        $experience->update($data);

        $experience->save();

        return to_route('admin.experiences.show', $experience)->with('alert-message', 'Progetto modificato con successo!')->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return to_route('admin.experiences.index')->with('alert-type', 'success')->with('alert-message', "Esperienza eliminata con successo!");
    }
}
