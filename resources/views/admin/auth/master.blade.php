<?php 
  $dir= LaravelLocalization::getCurrentLocale() == 'ar' ? 'assets-admin-rtl':'assets-admin';
?>
<!doctype html>
<html lang="en">
  @include('admin.auth.head')
 
  <body class="light  @if ( LaravelLocalization::getCurrentLocale() == 'ar' ) rtl @endif ">
    
    @yield('content')
    
    @include('admin.auth.scripts')
  </body>
</html>
</body>
</html>