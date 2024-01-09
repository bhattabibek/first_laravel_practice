<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Ruda&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>M & A Wood Working</title>
</head>
<body>
  <div class="banner-image">
<div class="nav-bar">
 
 <div class="logo">  <img src="images/logo.png" alt="logo"></div>

  <!-- <div class="contact">
    <i class="fa-regular fa-envelope"></i>
    <p>anderson.lallay@gmail.com</p>
  </div> -->
  <div class="links">
    <ul>
      <li>Home</li>
      <li>About Us</li>
      <li>Services</li>
      <li>Gallery</li>
      <li>Contact Us</li>
    </ul>
  </div>

</div>



</div>

<div>
  @yield('content')
  
</div>






     
 
  <div class="footer">
    <img src="images/logo.png" alt="">
    <ul>
      <li>Home</li>
    <li>About Us</li>
    <li>Services</li>
    <li>Gallery</li>
    <li>Contact Us</li>
    </ul>
    <br>
    <br>
    <hr>
  
  </div>
  <div class="footer copyright">
    <p>Copyright © M & A Wood Working INC.  All Rights Reserved</p>
  </div>
  <script>
    $(document).ready(function(){
  $("img").click(function(){
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
});

$("video").click(function(){
  var v = $("video > source");
  var t = v.attr("src");
  $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
  $("#myModal").modal();  
});
});//EOF Document.ready
  </script>
</body>
</html>