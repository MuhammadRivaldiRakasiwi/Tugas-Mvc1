@extends('blog.template')

@section('content')
    


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <br>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content"></textarea>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
</form>
@endsection
    