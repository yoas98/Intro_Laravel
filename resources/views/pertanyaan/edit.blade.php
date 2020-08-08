@extends('adminlte.master')

@section('content')
<div class="card card-primary mt-3 ml-3">
    <div class="card-header">
    <h3 class="card-title">Edit Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-body">
        <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->judul) }}" placeholder="Enter title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
        <label for="body">Isi</label>
        <input type="text" class="form-control" id="body" name="body" value="{{ old('body', $post->isi) }}" placeholder="body">
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
@endsection