<!-- Container (Portfolio Section) -->

<div id="article" class="container-fluid text-center bg-grey">
    <h2>Artikel</h2><br>
    @foreach ($artikel as $row)
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="/upload/post/{{ $row->sampul }}" class="card-img-top" alt="..." width="400"
                    height="auto"></a>

                <a href="/artikel/artikel">
                    <p><strong>{{ $row->judul }}</strong></p>
                </a>
                <p>{{ $konten = substr($row->konten, 0, 80) }}...</p>
                <p class="card-text"><small class="text-muted">{{ $row->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @endforeach
</div>
<div class="thumbnail">{{ $artikel->links() }}</div>
</div><br>
