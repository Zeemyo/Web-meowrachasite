@extends('artikel/template/app')
@section('title', 'Adopsi')

@section('content')



  

   <div class="card mt-4 shadow-sm">
        <img src="/upload/adopsi/{{$adopsi->image}}" height="auto" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$adopsi->title}}</h3>
            <small class="card-text">
                -
                <span class="text-muted">{{$adopsi->created_at->diffForHumans()}}</span>
                -
                
                
            </small>
            <br>

            
            <hr>
            <p class="card-text">{!!$adopsi->nama_kucing!!}</p>
            <p class="card-text">{!!$adopsi->jenis_kucing!!}</p>
            <p class="card-text">{!!$adopsi->alasan_owner!!}</p>
            <p class="card-text">{!!$adopsi->medical_note!!}</p>
            <p class="card-text">{!!$adopsi->deskripsi!!}</p>

            
        </div>
    </div>

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
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-wwe7ssfgas.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection