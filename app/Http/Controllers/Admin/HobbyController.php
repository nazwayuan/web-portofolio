<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::withCount('items')->latest()->get();
        return view('admin.hobbies.index', compact('hobbies'));
    }

    public function create()
    {
        return view('admin.hobbies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
            'description' => 'required|string',
            'type' => 'required|in:film,recipe,gallery,text'
        ]);

        Hobby::create($validated);

        return redirect()->route('admin.hobbies.index')
            ->with('success', 'Hobby berhasil ditambahkan!');
    }

    public function edit(Hobby $hobby)
    {
        return view('admin.hobbies.edit', compact('hobby'));
    }

    public function update(Request $request, Hobby $hobby)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
            'description' => 'required|string',
            'type' => 'required|in:film,recipe,gallery,text'
        ]);

        $hobby->update($validated);

        return redirect()->route('admin.hobbies.index')
            ->with('success', 'Hobby berhasil diupdate!');
    }

    public function destroy(Hobby $hobby)
    {
        $hobby->delete();

        return redirect()->route('admin.hobbies.index')
            ->with('success', 'Hobby berhasil dihapus!');
    }
}