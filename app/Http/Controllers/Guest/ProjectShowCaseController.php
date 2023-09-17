<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectShowCaseController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at')->simplePaginate(5);
        return view('guest.ProjectShowCase', compact('projects'));
    }
}
