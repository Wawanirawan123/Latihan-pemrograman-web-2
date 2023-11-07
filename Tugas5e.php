<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
</head>
<body>

<?php
// Daftar data dengan minimal 10 entri
$data = array(
    array(
        'NIM' => '2012325001',
        'Nama' => 'Jeff Bezos',
        'Gambar' => 'JeffBezos.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Investor dan pebisnis IT dengan menjadi CEO sekaligus pendiri raksasa E-comerce dunia Amazon.'
    ),
    array(
        'NIM' => '2012325002',
        'Nama' => 'Bill Gates',
        'Gambar' => 'BillGates.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => ' perusahaan IT Software yang bergerak pada bidang website (BING), Microsoft Windows (Sistem Operasi), dan Aplikasi perkantoran Micrososft Office.'
    ),
    array(
        'NIM' => '2012325003',
        'Nama' => 'Larry Page',
        'Gambar' => 'LarryPage.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pendiri mesin pencarian Google.'
    ),
    array(
        'NIM' => '2012325004',
        'Nama' => 'Jack Ma',
        'Gambar' => 'JackMa.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pendiri E-Comerce terbesar di China, yaitu AliBaba.'
    ),
    array(
        'NIM' => '2012325005',
        'Nama' => 'Sergey brin',
        'Gambar' => 'SergeyBrin.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pebisnis sukses di bidang IT yang menjadi Founder Google.com.'
    ),
    // Tambahkan 5 entri lagi
    array(
        'NIM' => '2012325006',
        'Nama' => 'Mark Zuckenberg',
        'Gambar' => 'MarkZ.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Salah satu orang terkaya di dunia pada usia yang masih muda dengan pendirian situs jejaring sosial Facebook.'
    ),
    array(
        'NIM' => '2012325007',
        'Nama' => 'Steve Jobs',
        'Gambar' => 'SteveJobs.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pendiri dan manta CEO dari Apple.inc perusahan IT komputer raksasa dunia.'
    ),
    array(
        'NIM' => '2012325008',
        'Nama' => 'Andy Rubin',
        'Gambar' => 'AndyRubin.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Penemu dan pembuat sistem operasi robot hijau (Android)'
    ),
    array(
        'NIM' => '2012325009',
        'Nama' => 'Jan Koum',
        'Gambar' => 'JanKoum.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pendiri dan CEO dari WhatsApp.inc.'
    ),
    array(
        'NIM' => '2012325010',
        'Nama' => 'Lei Jun',
        'Gambar' => 'LeiJun.jfif',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Pendiri smartphone murah dengan sistem penjualan kreatif Xiaomi.'
    ),
);

echo '<table border="1">';
echo '<tr>';
echo '<th>NIM</th>';
echo '<th>Nama</th>';
echo '<th>Gambar</th>';
echo '<th>Kategori</th>';
echo '<th>Deskripsi</th>';
echo '</tr>';

foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['NIM'] . '</td>';
    echo '<td>' . $entry['Nama'] . '</td>';
    echo '<td><img src="' . $entry['Gambar'] . '" width="100" height="100"></td>';
    echo '<td>' . $entry['Kategori'] . '</td>';
    echo '<td>' . $entry['Deskripsi'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>