<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hobby;
use App\Models\HobbyItem;
use Illuminate\Http\Request;

class HobbyItemController extends Controller
{
    public function index(Hobby $hobby)
    {
        $items = $hobby->items()->latest()->get();
        return view('admin.hobby-items.index', compact('hobby', 'items'));
    }

    public function create(Hobby $hobby)
    {
        return view('admin.hobby-items.create', compact('hobby'));
    }

    public function store(Request $request, Hobby $hobby)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'metadata' => 'nullable|json'
        ]);

        if (isset($validated['metadata'])) {
            $validated['metadata'] = json_decode($validated['metadata'], true);
        }

        $hobby->items()->create($validated);

        return redirect()->route('admin.hobby-items.index', $hobby)
            ->with('success', 'Item berhasil ditambahkan!');
    }

    public function edit(Hobby $hobby, HobbyItem $item)
    {
        return view('admin.hobby-items.edit', compact('hobby', 'item'));
    }

    public function update(Request $request, Hobby $hobby, HobbyItem $item)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'metadata' => 'nullable|json'
        ]);

        if (isset($validated['metadata'])) {
            $validated['metadata'] = json_decode($validated['metadata'], true);
        }

        $item->update($validated);

        return redirect()->route('admin.hobby-items.index', $hobby)
            ->with('success', 'Item berhasil diupdate!');
    }

    public function destroy(Hobby $hobby, HobbyItem $item)
    {
        $item->delete();

        return redirect()->route('admin.hobby-items.index', $hobby)
            ->with('success', 'Item berhasil dihapus!');
    }
}