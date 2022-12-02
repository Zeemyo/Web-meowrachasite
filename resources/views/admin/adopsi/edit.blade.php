@extends('sb-admin/app')
@section('title', 'adopsi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">adopsi</h1>

    <form action="/adopsi/{{$adopsi->id}}" method="adopsi" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $adopsi->title}}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Alasan Owner</label>
            <input type="text" class="form-control" id="alasan_owner" name="alasan_owner" value="{{old('alasan_owner') ? old('alasan_owner') : $adopsi->alasan_owner}}">
            @error('alasan_owner')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="medical_note">Medical Note</label>
            <input type="text" class="form-control" id="medical_note" name="medical_note" value="{{old('medical_note') ? old('medical_note') : $adopsi->medical_note}}">
            @error('medical_note')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
               
                
        <div class="form-group">
            <label for="editor">deskripsi</label>
            <textarea class="form-control" id="editor" rows="10" name="deskripsi">{{old('deskripsi') ? old('deskripsi') : $adopsi->deskripsi}}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/adopsi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection

