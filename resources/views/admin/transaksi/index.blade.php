@extends('sb-admin/app')
@section('title', 'transaksi')


@section('content')
{{-- flashdata --}}
    {!! session('sukses') !!}

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Transaksi</h1>

    <a href="/transaksi/create/" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah transaksi</a>


  
        <table class="table mt-4 table-hover table-bordered">
        <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Biaya Titip</th>
                <th scope="col">Biaya Tambahan</th>
                <th scope="col">Biaya Antar Jemput</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
        </thead>
        <tbody>
                @foreach ($transaksi as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->biaya_titip}}</td>
                    <td>{{$row->biaya_tambahan}}</td>
                    <td>{{$row->biaya_antar_jemput}}</td>
                    <td>{{$row->total}}</td>
                    <td>{{$row->status}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/transaksi/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <form action="/transaksi/{{$row->id}}" method="post">
                        @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        {{$transaksi->links()}}
        

@endsection

        