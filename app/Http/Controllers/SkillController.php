<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest; // Menggunakan form request untuk validasi

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua keterampilan dari database
        $skill = Skill::all();
        // Mengirimkan keterampilan ke view
        return view('skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan ke halaman form untuk menambah keterampilan baru
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request) // Gunakan SkillRequest untuk validasi
    {
        // Membuat keterampilan baru dengan data yang sudah tervalidasi
        Skill::create($request->validated());
        
        // Redirect ke halaman daftar keterampilan dengan pesan sukses
        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        // Menampilkan detail keterampilan yang dipilih
        return view('skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        // Mengarahkan ke halaman form untuk mengedit keterampilan yang dipilih
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill) // Gunakan SkillRequest untuk validasi
    {
        // Update keterampilan dengan data yang sudah tervalidasi
        $skill->update($request->validated());

        // Redirect ke halaman daftar keterampilan dengan pesan sukses
        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // Hapus keterampilan dari database
        $skill->delete();

        // Redirect ke halaman daftar keterampilan dengan pesan sukses
        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil dihapus.');
    }
}
