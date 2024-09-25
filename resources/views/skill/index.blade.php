@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <section>
            <h1 class="text-center mb-4">Daftar Keterampilan</h1>
            <div class="text-center mb-3">
                <a href="{{ route('skill.create') }}" class="btn btn-primary">Tambah Keterampilan</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success mt-2 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Keterampilan</th>
                            <th>Tingkat Keahlian</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skill as $skill)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $skill->skill_name }}</td>
                                <td>{{ $skill->proficiency }}</td>
                                <td>{{ $skill->description }}</td>
                                <td>
                                    <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
