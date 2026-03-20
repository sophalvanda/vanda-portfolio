<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() { return response()->json(Skill::all()); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:skills',
            'icon' => 'required|string',
            'description' => 'required|string',
        ]);

        $skill = Skill::create($validated);
        return response()->json($skill, 201);
    }

    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return response()->json($skill);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json(['message' => 'Skill removed']);
    }
}