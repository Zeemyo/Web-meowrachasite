@extends('sb-admin/app')
@section('title', 'adopsi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">adopsi</h1>

    <form action="/adopsi/{{$adopsi->id}}" method="adopsi" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="row">
            <div class="col-md-2">
                <img src="/upload/adopsi/{{$adopsi->image}}" width="100%" height="150px" class="mt-2" alt="">
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
        <div class="form-group">
            <label for="nama">Nama Kucing</label>
            <input type="text" class="form-control" id="nama_kucing" name="nama_kucing" value="{{$adopsi->nama_kucing}}">
        </div>
        <div class="form-group">
            <label for="nama">Jenis Kucing</label>
            <input type="text" class="form-control" id="jenis_kucing" name="jenis_kucing" value="{{$adopsi->jenis_kucing}}">
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

