<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructions = Instruction::orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.instructions.index', compact('instructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instruction = new Instruction();
        return view('admin.instructions.create', compact('instruction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:50|unique:instructions',
                'description' => 'required|string',
                'image' => 'nullable|image:jpg,jpeg,png',
                'qualification_study' => 'required|string|max:50',
                'course_study' => 'required|string|max:80',
                'valuation' => 'required|string|max:30',
                'start_date' => 'required|date',
                'end_date' => 'required|date',

            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'description.required' => "Attenzione! Non può esistere un'istruzione senza contenuto",

                'image.image' => "Attenzione! L'immagine inserita non è valida",

                'qualification_study.required' => 'Attenzione! La qualifica di studio è obbligatoria',
                'qualification_study.max' => 'Attenzione! La qualifica di studio deve essere lunga massimo :max caratteri',

                'course_study.required' => 'Attenzione! Il corso di studi è obbligatorio',
                'course_study.max' => 'Attenzione! Il corso di studi deve essere lungo massimo :max caratteri',

                'valuation.required' => 'Attenzione! La valutazione è obbligatoria',
                'valuation.max' => 'Attenzione! La valutazione deve essere lunga massimo :max caratteri',

                'start_date.required' => "Attenzione! L'inizio è obbligatorio",

                'end_date.required' => 'Attenzione! La fine è obbligatoria',
            ]
        );

        $data = $request->all();

        $instruction = new Instruction();

        $instruction->fill($data);

        $instruction->save();

        return to_route('admin.instructions.show', $instruction)->with('alert-type', 'success')->with('alert-message', "Istruzione inserita con successo!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruction $instruction)
    {
        return view('admin.instructions.show', compact('instruction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruction $instruction)
    {
        return view('admin.instructions.edit', compact('instruction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instruction $instruction)
    {
        $request->validate(
            [
                'title' => ['required', 'string', 'max:50', Rule::unique('projects')->ignore($instruction->id)],
                'description' => 'required|string',
                'image' => 'nullable|image:jpg,jpeg,png',
                'qualification_study' => 'required|string|max:50',
                'course_study' => 'required|string|max:80',
                'valuation' => 'required|string|max:30',
                'start_date' => 'required|date',
                'end_date' => 'required|date',

            ],
            [
                'title.required' => 'Attenzione! Il titolo è obbligatorio',
                'title.max' => 'Attenzione! Il titolo deve essere lungo massimo :max caratteri',
                'title.unique' => "Attenzione! Il titolo $request->title esiste già",

                'description.required' => "Attenzione! Non può esistere un'istruzione senza contenuto",

                'image.image' => "Attenzione! L'immagine inserita non è valida",

                'qualification_study.required' => 'Attenzione! La qualifica di studio è obbligatoria',
                'qualification_study.max' => 'Attenzione! La qualifica di studio deve essere lunga massimo :max caratteri',

                'course_study.required' => 'Attenzione! Il corso di studi è obbligatorio',
                'course_study.max' => 'Attenzione! Il corso di studi deve essere lungo massimo :max caratteri',

                'valuation.required' => 'Attenzione! La valutazione è obbligatoria',
                'valuation.max' => 'Attenzione! La valutazione deve essere lunga massimo :max caratteri',

                'start_date.required' => "Attenzione! L'inizio è obbligatorio",

                'end_date.required' => 'Attenzione! La fine è obbligatoria',
            ]
        );

        $data = $request->all();

        $instruction->update($data);

        $instruction->save();

        return to_route('admin.instructions.show', $instruction)->with('alert-message', 'Progetto modificato con successo!')->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        $instruction->delete();

        return to_route('admin.instructions.index')->with('alert-type', 'success')->with('alert-message', "Istruzione eliminata con successo!");
    }
}
