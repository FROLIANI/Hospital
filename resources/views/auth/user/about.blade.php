<!DOCTYPE html>
<html lang="en">
<head>
  
@include('auth.user.style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top" style="padding: 30px"></div>

  <div style="padding-bottom: 40px">
 @include('auth.user.header')
</div>


 <div class="container">


@include('auth.user.body')

@include('auth.user.footer')


   @include('auth.user.script')
  
</body>
</html>