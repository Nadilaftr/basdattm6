@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <section>
            <h1 class="text-center mb-4">Edit Keterampilan</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('skill.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="skill_name">Nama Keterampilan</label>
                    <input type="text" name="skill_name" class="form-control" value="{{ old('skill_name', $skill->skill_name) }}" required>
                </div>

                <div class="form-group">
                    <label for="proficiency">Tingkat Keahlian</label>
                    <input type="number" name="proficiency" class="form-control" value="{{ old('proficiency', $skill->proficiency) }}" min="1" max="5" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" class="form-control" required>{{ old('description', $skill->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Perbarui</button>
                <a href="{{ route('skill.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </section>
    </div>
@endsection
