@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
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

    .btn {
        display: inline-block;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-warning {
        background-color: #ffc107;
        color: black;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

<div class="container">
    <h1>Daftar Kontak</h1>

    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Tambah Kontak</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Instansi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->nama }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->telepon }}</td>
                    <td>{{ $contact->alamat }}</td>
                    <td>{{ $contact->instansi }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
