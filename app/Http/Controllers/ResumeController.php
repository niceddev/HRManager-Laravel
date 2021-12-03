<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function index()
    {
        $currentUserID = auth()->id();
        $currentUserData = User::where('id', $currentUserID)->first();
        $currentUserSkills = Skill::all();
        return view('resume.index')->with([
                                            'currentUserData' => $currentUserData,
                                            'currentUserSkills' => $currentUserSkills
                                        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
