<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Instruction;
use App\Models\Skills;
use Illuminate\Http\Request;

class CurriculumShowCaseController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('created_at')->get();
        $instructions = Instruction::orderBy('created_at')->get();
        $skills = Skills::orderBy('created_at')->get();

        // Passa i dati alla vista utilizzando un array associativo
        return view('guest.CvShowCase', [
            'experiences' => $experiences,
            'instructions' => $instructions,
            'skills' => $skills,
        ]);
    }
}
