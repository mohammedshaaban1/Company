<!doctype html>
<html lang="en">
    @include('admin.partials.head')
  
  <body class="vertical  light @if ( LaravelLocalization::getCurrentLocale() == 'ar' ) rtl @endif ">
    <div class="wrapper">
        @include('admin.partials.navbar')
      
        @include('admin.partials.sidebar')
      
        <main role="main" class="main-content">
            @yield('content')
          
          </main> <!-- main -->

    </div> <!-- .wrapper -->
    @include('admin.partials.secripts')

    
<script>
  function comfirmDelete(id) {
    if (confirm('Are you Sure You Want To Delete This Recorde ?')) {
      document.getElementById('deleteForm-'+id).submit();
      }
  }
</script> 
  </body>
</html>