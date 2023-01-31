<!doctype html>
<html lang="en">
{{-- css --}}
    @include('artikel/template/css')

  <body id="page-top">
    {{-- navbar --}}
    
    @include('artikel/template/navbar')

    

    

    <!-- <div class="container">
        @yield('content')
    </div> -->

  
   {{-- javascript --}}
   @include('sb-admin/javascript')
  </body>
  <br>
    <br> 

    <div class="container">
        @include('artikel/template/footer')
    </div>
  
</html>