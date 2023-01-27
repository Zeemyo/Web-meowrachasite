@extends('sb-admin/app')
@section('title', 'users')


@section('content')
{{-- flashdata --}}
    {!! session('sukses') !!}

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users Information</h1>

    


  
        <table class="table mt-4 table-hover table-bordered">
        <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Pasword</th>
                <th scope="col">Aksi</th>
                </tr>
        </thead>
        <tbody>
                @foreach ($users as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/users/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <form action="/users/{{$row->id}}" method="post">
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
        {{$users->links()}}
        

@endsection

        