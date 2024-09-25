<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $contacts = Contacts::all();
        return view('contacts.index', compact('contacts'));
    }

    // Menampilkan form untuk membuat kontak baru
    public function create()
    {
        return view('contacts.create'); // Hapus compact('contact')
    }

    // Menyimpan kontak baru
    public function store(ContactsRequest $request)
    {
        Contacts::create($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    // Menampilkan detail kontak tertentu
    public function show(Contacts $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // Menampilkan form untuk mengedit kontak
    public function edit(Contacts $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Mengupdate kontak
    public function update(ContactsRequest $request, Contacts $contact)
    {
        $contact->update($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    // Menghapus kontak
    public function destroy(Contacts $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
