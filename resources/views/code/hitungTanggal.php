<?php
$timestamp = $user->created_at;
$dateTime = new DateTime($timestamp);
$bulan = $dateTime->format('F'); // Mengambil nama bulan
$tahun = $dateTime->format('y'); // Mengambil tahun dalam format dua digit

// Ubah nama bulan ke bahasa Indonesia jika diperlukan
$bulanIndonesia = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

$bulan = $bulanIndonesia[$bulan];

// Format akhir yang diinginkan
$formatAkhir = "$bulan, $tahun"; // Output: "Oktober, 23"
?>