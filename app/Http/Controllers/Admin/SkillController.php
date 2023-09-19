<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skills::orderBy('updated_at', 'DESC')->paginate(10);
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skill = new Skills();
        return view('admin.skills.create', compact('skill'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $skill = new Skills();

        $skill->fill($data);

        $skill->save();

        return to_route('admin.skills.show', $skill)->with('alert-type', 'success')->with('alert-message', "Competenza inserita con successo!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Skills $skill)
    {
        return view('admin.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skills $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skills $skill)
    {
        $data = $request->all();

        $skill->update($data);

        $skill->save();

        return to_route('admin.skills.show', $skill)->with('alert-message', 'Competenza modificata con successo!')->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skills $skill)
    {
        $skill->delete();

        return to_route('admin.skills.index')->with('alert-type', 'success')->with('alert-message', "Competenza eliminata con successo!");
    }
}
