<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama_museum = $_POST["nama_museum"];
    $tanggal = $_POST["tanggal"];
    $waktu_mulai = $_POST["waktu_mulai"];
    $waktu_selesai = $_POST["waktu_selesai"];
    $keterangan = $_POST["keterangan"];

    if ($_POST["action"] == "create") {
        $sql = "INSERT INTO tb_jadwal (nama_museum, tanggal, waktu_mulai, waktu_selesai, keterangan) VALUES ('$nama_museum', '$tanggal', '$waktu_mulai', '$waktu_selesai', '$keterangan')";
    } elseif ($_POST["action"] == "update") {
        $sql = "UPDATE tb_jadwal SET nama_museum='$nama_museum', tanggal='$tanggal', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai', keterangan='$keterangan' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM tb_jadwal WHERE id=$id";
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
$result = $conn->query("SELECT * FROM tb_jadwal");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jadwal Museum</title>
    <link rel="stylesheet" href="css/style.css">
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
    <h1>Jadwal Museum</h1>

       

     <!-- Button to Generate PDF -->
     <button onclick="window.location.href='generate_pdf.php'">Download PDF</button>
    <form method="POST" action="jadwal.php">
        <input type="hidden" name="id" id="id">
        <table>
            <tr>
                <td>Nama Museum:</td>
                <td><input type="text" name="nama_museum" id="nama_museum" required></td>
            </tr>
            <tr>
                <td>Tanggal:</td>
                <td><input type="date" name="tanggal" id="tanggal" required></td>
            </tr>
            <tr>
                <td>Waktu Mulai:</td>
                <td><input type="time" name="waktu_mulai" id="waktu_mulai" required></td>
            </tr>
            <tr>
                <td>Waktu Selesai:</td>
                <td><input type="time" name="waktu_selesai" id="waktu_selesai" required></td>
            </tr>
            <tr>
                <td>Keterangan:</td>
                <td><textarea name="keterangan" id="keterangan"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="action" value="create">Create</button>
                    <button type="submit" name="action" value="update">Update</button>
                </td>
            </tr>
        </table>
    </form>
        
    <h2>Daftar Jadwal</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Museum</th>
            <th>Tanggal</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Keterangan</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_museum']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['waktu_mulai']; ?></td>
            <td><?php echo $row['waktu_selesai']; ?></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td>
                <a href="javascript:void(0)" onclick="editRecord('<?php echo $row['id']; ?>', '<?php echo $row['nama_museum']; ?>', '<?php echo $row['tanggal']; ?>', '<?php echo $row['waktu_mulai']; ?>', '<?php echo $row['waktu_selesai']; ?>', '<?php echo $row['keterangan']; ?>')">Edit</a>
                <a href="jadwal.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script src="js/script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
