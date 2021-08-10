@extends('blog.template')

@section('content')
    
<form action="{{ route('blog.update',$blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" value="{{ $blog->gambar }}">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $blog->judul }}">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" value="{{ $blog->content }}"></textarea>
            </div>
            <br>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
</form>
    
@endsection