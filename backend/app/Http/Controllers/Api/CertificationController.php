<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index() { return response()->json(Certification::all()); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'issuer' => 'required|string',
            'icon' => 'required|string',
        ]);

        $certification = Certification::create($validated);
        return response()->json($certification, 201);
    }

    public function destroy(Certification $certification)
    {
        $certification->delete();
        return response()->json(['message' => 'Certification deleted']);
    }
}