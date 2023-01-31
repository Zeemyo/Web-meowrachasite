@extends('artikel/template/app')

<div>
    {{-- head --}}
@include('artikel/template/head')
</div>

@section('content')


   
    <div class="container">
        @include('artikel/template/about')
    </div>

    <div class="container">
        @include('artikel/template/artikel-carousell')
    </div>

    <div class="container">
        @include('artikel/template/services')
    </div>
    

    <!-- <h2 class="my-4 text-center">@yield('title')</h2>

    <div class="d-flex justify-content-center">
        
    </div>
    
        <div class="row mt-4">
            @foreach ($artikel as $row)
                    <div class="col-md-4 mt-5">
                        <div class="card shadow-sm">
                            <img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$row->judul}}</b></h5>
                                <p class="card-text">{{ $konten = substr($row->konten, 0, 80) }}...</p>
                                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
                            </div>
                        </div>
                    </div>
                    
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div> -->

        
        
   
@endsection