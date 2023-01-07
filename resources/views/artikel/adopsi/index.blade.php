@extends('artikel/template/app')

@section('content')
   

    

    <h2 class="my-4 text-center">@yield('title')</h2>

    <div class="d-flex justify-content-center">
        
    </div>
    
        <div class="row mt-4">
            @foreach ($adopsi as $row)
                    <div class="col-md-4 mt-5">
                        <div class="card shadow-sm">
                        <img src="/upload/adopsi/{{$row->image}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                
                                <h2 class="card-title"><b>{{ $row->nama_kucing }}</b></h2>
                                <p class="card-text"><b>jenis: </b>{{ $row->jenis_kucing}}</p>
                                <p class="card-text">{{ $row->deskripsi}}</p>
                                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">{{$adopsi->links()}}</div>
        
   
@endsection