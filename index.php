<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtfulEleganceExpression</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

      
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label id="DOM" class="logo">halooo</label>
        <script>
          document.getElementById("DOM").innerHTML = "ArtfulEleganceExpression";
        </script>
      
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#">Pustaka Indonesia</a></li>
          <li><a href="#">Tokoh Indonesia</a></li>
          <li><a href="#">Museum</a></li>
          <li><a href="tiket.html">Tiket</a></li>
          <li><a href="jadwal.html">Jadwal Tiket Masuk</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="register.html">Register</a></li>
        </ul>
      </nav>

<!-- Slideshow container -->
<div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/tari kecak.jpg" style="width:100%">
    <div class="text">Tari Kecak Dari Bali</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/tari jaipong.jpg" style="width:100%">
    <div class="text">Tari Jaipong Dari Jawa Timur</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/tari saman.jpg" style="width:100%">
    <div class="text">Tari Saman Dari SUmatera Utara</div>
  </div>

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


        <div class="row">
            <div class="column">
              <img src="https://indonesiakaya.com/wp-content/uploads/2023/08/Azab-_-Sengsara_2-306x230.jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column">
              <img src="https://indonesiakaya.com/wp-content/uploads/2023/08/Azab-_-Sengsara_2-306x230.jpg" alt="Forest" style="width:100%">
            </div>
            <div class="column">
              <img src="https://indonesiakaya.com/wp-content/uploads/2023/08/Azab-_-Sengsara_2-306x230.jpg" alt="Mountains" style="width:100%">
            </div>
            <div class="column">
                <img src="https://indonesiakaya.com/wp-content/uploads/2023/08/Azab-_-Sengsara_2-306x230.jpg" alt="Mountains" style="width:100%">
              </div>
          </div>

       <script src="js/script.js"></script> 
</body>
</html>
