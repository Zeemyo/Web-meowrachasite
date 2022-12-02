<!doctype html>
<html lang="en">
{{-- head --}}
    @include('sb-admin/head')

  <body id="page-top">
    {{-- navbar --}}
    @include('artikel/template/navbar')

    <div class="container">
        @yield('content')
    </div>

  
   {{-- javascript --}}
   @include('sb-admin/javascript')
  </body>
  
</html>