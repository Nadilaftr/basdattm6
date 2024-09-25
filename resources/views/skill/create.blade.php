@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <section>
            <h1 class="text-center mb-4">Tambah Keterampilan Baru</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('skill.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="skill_name" class="form-label">Nama Keterampilan</label>
                    <input type="text" name="skill_name" class="form-control" value="{{ old('skill_name') }}" placeholder="Masukkan nama keterampilan" required>
                </div>

                <div class="form-group mb-3">
                    <label for="proficiency" class="form-label">Tingkat Keahlian (1-5)</label>
                    <input type="number" name="proficiency" class="form-control" value="{{ old('proficiency') }}" min="1" max="5" placeholder="1-5" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Deskripsikan keterampilan" required>{{ old('description') }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('skill.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>

        </section>
    </div>
@endsection
