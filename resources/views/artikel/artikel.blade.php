@extends('artikel/template/app')
@section('title', 'Artikel')



<br><br><br><br>

@foreach ($artikel as $row)
    <div class="card mt-4 shadow-sm">
        <div style="text-align: center;">
            <img src="/upload/post/{{ $row->sampul }}" style="width: 720px; height: 720px" class="card-img-top"
                alt="..." align-text="center">

            <div class="card-body">
                <h3 class="card-title"><strong>{{ $row->judul }}</strong></h3>
            </div>
            <small class="card-text">
                <span class="text-muted"><a href="/artikel-kategori/{{ $row->kategori->slug }}">Tag:
                        {{ $row->kategori->nama }}</a></span>
                -
                <span class="text-muted">{{ $row->created_at->diffForHumans() }}</span>



            </small>
            <br>


            <hr>

            <p class="card-text">{!! $row->konten !!}</p>



        </div>
    </div>
@endforeach

<br><br><br>
<div id="disqus_thread" class="mt-4"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://blog-wwe7ssfgas.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>
