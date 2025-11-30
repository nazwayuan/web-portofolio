<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:kepanitiaan,lomba,penghargaan',
            'issuer' => 'required|string|max:255',
            'year' => 'required|integer|min:2000|max:2100',
            'description' => 'nullable',
            'icon' => 'nullable|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/certificates'), $imageName);
            $data['image'] = 'certificates/' . $imageName;
        }

        Certificate::create($data);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil ditambahkan!');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:kepanitiaan,lomba,penghargaan',
            'issuer' => 'required|string|max:255',
            'year' => 'required|integer|min:2000|max:2100',
            'description' => 'nullable',
            'icon' => 'nullable|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($certificate->image && file_exists(public_path('images/' . $certificate->image))) {
                unlink(public_path('images/' . $certificate->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/certificates'), $imageName);
            $data['image'] = 'certificates/' . $imageName;
        }

        $certificate->update($data);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil diupdate!');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image && file_exists(public_path('images/' . $certificate->image))) {
            unlink(public_path('images/' . $certificate->image));
        }

        $certificate->delete();
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil dihapus!');
    }
}