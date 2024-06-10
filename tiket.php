<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tempat = $_POST["tempat"];

    if ($_POST["action"] == "create") {
        $sql = "INSERT INTO tb_tiket (nama, alamat, tempat) VALUES ('$nama', '$alamat', '$tempat')";
    } elseif ($_POST["action"] == "update") {
        $sql = "UPDATE tb_tiket SET nama='$nama', alamat='$alamat', tempat='$tempat' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM tb_tiket WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<?php
include 'config.php';
$result = $conn->query("SELECT * FROM tb_tiket");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Tiket</title>
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
          <li><a href="tb_tiket.html">Tiket</a></li>
          <li><a href="jadwal.html">Jadwal Tiket Masuk</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="register.html">Register</a></li>
        </ul> -->
    </nav>
    <h1>Ini untuk pemesanan tiket</h1>
    <form method="POST" action="tiket.php">
        <input type="hidden" name="id" id="id">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name="alamat" id="alamat" required></td>
            </tr>
            <tr>
                <td>Tempat Tujuan:</td>
                <td><input type="text" name="tempat" id="tempat" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="action" value="create">Create</button>
                    <button type="submit" name="action" value="update">Update</button>
                </td>
            </tr>
        </table>
    </form>
        
    <h2>Daftar Tiket</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Tujuan</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['tempat']; ?></td>
            <td>
                <a href="javascript:void(0)" onclick="editRecord('<?php echo $row['id']; ?>', '<?php echo $row['nama']; ?>', '<?php echo $row['alamat']; ?>', '<?php echo $row['tempat']; ?>')">Edit</a>
                <a href="tiket.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script src="js/style.js"></script>
</body>
</html>

<?php
$conn->close();
?>
