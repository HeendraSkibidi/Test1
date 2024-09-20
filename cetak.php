<?php
require('lib/fpdf.php'); 


include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_member'])) {
    $id_member = $_POST['id_member'];

    $query = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member = '$id_member'");
    $data_member = mysqli_fetch_assoc($query);

    if ($data_member) {
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'DATA LAPORAN TRANSAKSI', 0, 1, 'C');
        $pdf->Ln(10);

        $timezone = new DateTimeZone('Asia/Jakarta');

        // Buat objek DateTime dengan zona waktu yang telah ditentukan
        $currentDateTime = new DateTime('now', $timezone);

        // Format tanggal dan waktu sesuai dengan zona waktu Indonesia Barat
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Member: ' . $data_member['nama'], 0, 1, 'C');
        $pdf->Cell(0, 10, $formattedDateTime, 0, 1, 'C');
        $pdf->Ln(5); // Beri jarak antara nama member dan tabel

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Nama Paket', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Harga', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Qty', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Jumlah', 1, 1, 'C');

        $query_transaksi = mysqli_query($koneksi, "SELECT jenis_laundry.nama_paket, jenis_laundry.harga, transaksi.id, transaksi.qty 
        FROM jenis_laundry 
        JOIN transaksi ON transaksi.id_jenis_laundry = jenis_laundry.id_jenis_laundry
        WHERE
        transaksi.status = 0");

        $total = 0;
        $i = 1;
        while ($data = mysqli_fetch_array($query_transaksi)) {
            $jumlah = $data['harga'] * $data['qty'];
            $total += $jumlah;

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 10, $i, 1, 0, 'C');
            $pdf->Cell(50, 10, $data['nama_paket'], 1, 0);
            $pdf->Cell(40, 10, 'Rp ' . number_format($data['harga'], 0, ',', '.'), 1, 0, 'R');
            $pdf->Cell(20, 10, $data['qty'], 1, 0, 'C');
            $pdf->Cell(40, 10, 'Rp ' . number_format($jumlah, 0, ',', '.'), 1, 1, 'R');
            $i++;
        }

        $pdf->Cell(120, 10, 'Total', 1, 0, 'R');
        $pdf->Cell(40, 10, 'Rp ' . number_format($total, 0, ',', '.'), 1, 1, 'R');
        $pdf->Ln(10); 

        $pdf->Cell(40, 10, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Kembali', 0, 1, 'C', 0, 'index.php?page=transaksi/selesai&id_member=' . $id_member);

        $pdf->Output();
    } else {
        echo "Data member tidak ditemukan.";
    }
} else {
    echo "Tidak ada data yang diterima dari form.";
}
