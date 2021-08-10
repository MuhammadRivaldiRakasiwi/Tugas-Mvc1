@extends('blog.template')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="{{ route('blog.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Tambah Blog</a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Content</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        @forelse ($blogs as $blog)

        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td class="text-center">
                <img src="{{ url('/image/'.$blog->gambar) }}" class="rounded" style="width: 150px">
            </td>
            <td class="text-center">{{ $blog->judul }}</td>
            <td >{!! $blog->content !!}</td>

            <td class="text-center">
                <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">
            Data Blog Belum Tersedia
        </div>
        @endforelse
    </table>
</div>

@endsection
