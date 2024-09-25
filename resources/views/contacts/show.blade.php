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

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .card-text {
        margin: 5px 0;
    }

    .btn {
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>

<div class="container">
    <h1>Detail Kontak</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Email: </strong>{{ $contact->email }}</p>
            <p class="card-text"><strong>Telepon: </strong>{{ $contact->phone }}</p>
            <p class="card-text"><strong>Alamat: </strong>{{ $contact->address }}</p>
        </div>
    </div>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
