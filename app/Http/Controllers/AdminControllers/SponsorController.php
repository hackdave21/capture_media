<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest('id')->paginate(20);
        return view('admin.sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        return view('admin.sponsors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'boolean',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sponsors', 'public');
        }
        Sponsor::create($data);
        return redirect()->route('admin.sponsors.index')->with('success', 'Sponsor créé.');
    }

    public function show(Sponsor $sponsor)
    {
        return view('admin.sponsors.show', compact('sponsor'));
    }

    public function edit(Sponsor $sponsor)
    {
        return view('admin.sponsors.edit', compact('sponsor'));
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'boolean',
        ]);
        if ($request->hasFile('image')) {
            if ($sponsor->image) Storage::disk('public')->delete($sponsor->image);
            $data['image'] = $request->file('image')->store('sponsors', 'public');
        }
        $sponsor->update($data);
        return redirect()->route('admin.sponsors.index')->with('success', 'Sponsor mis à jour.');
    }

    public function destroy(Sponsor $sponsor)
    {
        if ($sponsor->image) Storage::disk('public')->delete($sponsor->image);
        $sponsor->delete();
        return back()->with('success', 'Sponsor supprimé.');
    }
}
