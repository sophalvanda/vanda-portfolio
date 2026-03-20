<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index() { return response()->json(Tool::all()); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:tools',
            'icon' => 'required|string',
        ]);

        $tool = Tool::create($validated);
        return response()->json($tool, 201);
    }

    public function destroy(Tool $tool)
    {
        $tool->delete();
        return response()->json(['message' => 'Tool removed']);
    }
}