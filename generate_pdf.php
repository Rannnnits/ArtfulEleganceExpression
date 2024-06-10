<?php
require 'vendor/autoload.php';  // Sesuaikan path jika tidak menggunakan Composer

use Dompdf\Dompdf;
use Dompdf\Options;

// Konfigurasi Dompdf
$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf = new Dompdf($options);

include 'config.php';

$result = $conn->query("SELECT * FROM tb_jadwal");

// Buat HTML untuk PDF
$html = '<h1>Laporan Jadwal Museum</h1>';
$html .= '<table border="1" style="width: 100%; border-collapse: collapse;">';
$html .= '<tr>
            <th>ID</th>
            <th>Nama Museum</th>
            <th>Tanggal</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Keterangan</th>
          </tr>';

while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['nama_museum'] . '</td>
                <td>' . $row['tanggal'] . '</td>
                <td>' . $row['waktu_mulai'] . '</td>
                <td>' . $row['waktu_selesai'] . '</td>
                <td>' . $row['keterangan'] . '</td>
              </tr>';
}

$html .= '</table>';

// Load HTML ke Dompdf
$dompdf->loadHtml($html);

// Set ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');

// Render PDF
$dompdf->render();

// Output file PDF
$dompdf->stream("laporan_jadwal_museum.pdf", array("Attachment" => false));
?>

<?php
$conn->close();
?>
