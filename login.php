
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
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
  <h1>login</h1>
  <form action="login_php.php" method="POST">
    <label>
        Username:<br />
        <input type="text" name="username" value="<?=@$username?>" /><br />
    </label>
    <label>
        Password:<br />
        <input type="password" name="password" /><br />
    </label>
    <input type="submit" value="Login" />
    <input type="hidden" name="redirect_to" value="<?=$redirect_to?>" />
</form>
    <div class="wrapper">
      <header>
        <i class="bx bx-cookie"></i>
        <h2>Cookies Consent</h2>
      </header>

      <div class="data">
        <p>This website use cookies to help you have a superior and more relevant browsing experience on the website. <a href="#"> Read more...</a></p>
      </div>

      <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
      </div>
    </div>
  </body>
</html>
