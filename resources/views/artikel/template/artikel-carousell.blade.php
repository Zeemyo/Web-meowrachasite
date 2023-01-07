<!-- Container (Portfolio Section) -->

<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Artikel</h2><br>
  @foreach ($artikel as $row)
    <div class="col-sm-4">
      <div class="thumbnail">
      <img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..." width="400" height="300"></a>
        <!-- <img src="paris.jpg" alt="Paris" width="400" height="300"> -->
        <p><strong>{{$row->judul}}</strong></p>
        <p>{{ $konten = substr($row->konten, 0, 80) }}...</p>
        <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
      </div>
    </div>
    @endforeach
    </div>
        <div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div>
  </div><br>