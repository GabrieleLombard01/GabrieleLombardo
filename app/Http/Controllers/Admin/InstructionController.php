<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;

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
    public function update(Request $request, string $id)
    {
        //
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
