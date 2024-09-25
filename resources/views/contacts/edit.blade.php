@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #66afe9;
        outline: none;
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
    }

    .btn-success {
        background-color: #5cb85c;
        color: white;
    }

    .btn-secondary {
        background-color: #f7f7f7;
        color: black;
    }

    .btn-success:hover {
        background-color: #4cae4c;
    }

    .btn-secondary:hover {
        background-color: #e7e7e7;
    }

    .text-danger {
        color: red;
    }
</style>

<div class="container">
    <h1>Edit Kontak</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $contact->nama) }}" required>
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $contact->telepon) }}">
            @error('telepon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $contact->alamat) }}</textarea>
            @error('alamat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="instansi">Instansi</label>
            <input type="text" name="instansi" class="form-control" value="{{ old('instansi', $contact->instansi) }}">
            @error('instansi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
