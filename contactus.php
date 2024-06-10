<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="js/script.js" defer></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ArtfulEleganceExpression</label>
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
      <h1>form untuk tentang kami</h1>
    <!-- A button to open the popup form -->
<button class="open-button" onclick="openForm()">Open Form</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>masukkan / kritik untuk kami</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>kritik/saran</b></label>
    <input type="text" placeholder="saran" name="saran" required>

    <button type="submit" class="btn">selesai</button>
    <button type="button" class="btn cancel" onclick="closeForm()">batal</button>
  </form>
</div>
</body>
</html>