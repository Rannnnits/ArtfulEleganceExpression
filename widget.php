<?php
include 'config.php';

$result = $conn->query("SELECT * FROM jadwal");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Museum Widget</title>
    <link rel="stylesheet" href="css/widget.css">
</head>
<body>
    <div class="widget">
        <h2>Jadwal Museum</h2>
        <button onclick="toggleForm()">Tambah Jadwal</button>
        <form id="jadwalForm" method="POST" action="jadwal.php" style="display: none;">
            <input type="hidden" name="id" id="id">
            <div>
                <label for="nama_museum">Nama Museum:</label>
                <input type="text" name="nama_museum" id="nama_museum" required>
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" required>
            </div>
            <div>
                <label for="waktu_mulai">Waktu Mulai:</label>
                <input type="time" name="waktu_mulai" id="waktu_mulai" required>
            </div>
            <div>
                <label for="waktu_selesai">Waktu Selesai:</label>
                <input type="time" name="waktu_selesai" id="waktu_selesai" required>
            </div>
            <div>
                <label for="keterangan">Keterangan:</label>
                <textarea name="keterangan" id="keterangan"></textarea>
            </div>
            <div>
                <button type="submit" name="action" value="create">Create</button>
                <button type="submit" name="action" value="update">Update</button>
            </div>
        </form>
        
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
                    <button onclick="editRecord('<?php echo $row['id']; ?>', '<?php echo $row['nama_museum']; ?>', '<?php echo $row['tanggal']; ?>', '<?php echo $row['waktu_mulai']; ?>', '<?php echo $row['waktu_selesai']; ?>', '<?php echo $row['keterangan']; ?>')">Edit</button>
                    <a href="jadwal.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <script src="js/widget.js"></script>
</body>
</html>

<?php
$conn->close();
?>
