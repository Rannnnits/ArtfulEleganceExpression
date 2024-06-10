<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ArtfulEleganceExpression</label>
        <!-- <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#">Pustaka Indonesia</a></li>
          <li><a href="#">Tokoh Indonesia</a></li>
          <li><a href="#">Museum</a></li>
          <li><a href="tiket.html">Tiket</a></li>
          <li><a href="jadwal.html">Jadwal Tiket Masuk</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="register.html">Register</a></li>
        </ul> -->
      </nav>
    <h1>ini untuk pemesanan tiket </h1>
    <div>
			<button type="button" class="btn btn-tambah">
				<a href="categories-entry.php">Tambah Data</a>
			</button>
            <form action="categories-proses.php" method="post" enctype="multipart/form-data">
					<label for="categories">nama</label>
					<input class="input" type="text" name="categories" id="categories" placeholder="nama" /><br>
					<label for="price">alamat</label>
					<input class="input" type="text" name="price" id="price" placeholder="alamat" /><br>
					<label for="description">destination</label>
					<input class="input" type="text" name="description" id="description" placeholder="destination" /><br>
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
				</form>
		</div>
</body>
</html>