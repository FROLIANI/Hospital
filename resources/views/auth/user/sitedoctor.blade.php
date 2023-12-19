<!DOCTYPE html>
<html lang="en">
<head>
  
@include('auth.user.style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

 @include('auth.user.header')

 <div class="container">

  
@include('auth.doctor')


  @include('auth.user.footer')


   @include('auth.user.script')
  
</body>
</html>