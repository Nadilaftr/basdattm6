@extends('layouts.app')

@section('content')
    <section>
        <h1>Detail Keterampilan</h1>

        <div class="card">
            <div class="card-body">
                <h3>{{ $skill->skill_name }}</h3>
                <p><strong>Tingkat Keahlian:</strong> {{ $skill->proficiency }}</p>
                <p><strong>Deskripsi:</strong> {{ $skill->description }}</p>
            </div>
        </div>

        <a href="{{ route('skill.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </section>
@endsection
