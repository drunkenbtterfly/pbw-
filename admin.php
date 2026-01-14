<?php
include "config/database.php";

$menu = $_GET['menu'] ?? 'kegiatan';
$aksi = $_GET['aksi'] ?? '';

if (isset($_POST['simpan_kegiatan'])) {
    $nama    = $_POST['nama'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';

    mysqli_query($conn, "
        INSERT INTO kegiatan 
        VALUES (NULL, '$nama', '$tanggal')
    ");
}

if (isset($_POST['simpan_jadwal'])) {
    $kelas      = $_POST['kelas'] ?? '';
    $hari       = $_POST['hari'] ?? '';
    $matakuliah = $_POST['matakuliah'] ?? '';
    $waktu      = $_POST['waktu'] ?? '';
    $ruang      = $_POST['ruang'] ?? '';
    $dosen      = $_POST['dosen'] ?? '';

    mysqli_query($conn, "
        INSERT INTO jadwal_kuliah 
        VALUES (NULL, '$kelas', '$hari', '$matakuliah', '$waktu', '$ruang', '$dosen')
    ");
}

if ($aksi === 'hapus_kegiatan' && isset($_GET['id'])) {
    mysqli_query($conn, "DELETE FROM kegiatan WHERE id=" . $_GET['id']);
}

if ($aksi === 'hapus_jadwal' && isset($_GET['id'])) {
    mysqli_query($conn, "DELETE FROM jadwal_kuliah WHERE id=" . $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin PBW</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
<div class="flex min-h-screen">

<aside class="w-64 bg-slate-900 text-white p-6">
    <h2 class="text-xl font-bold mb-6">Admin Panel</h2>
    <ul class="space-y-3">
        <li><a href="?menu=kegiatan" class="hover:text-blue-400">Kegiatan</a></li>
        <li><a href="?menu=jadwal" class="hover:text-blue-400">Jadwal Kuliah</a></li>
        <li><a href="main.php" class="hover:text-green-400">kembali</a></li>
    </ul>
</aside>

<main class="flex-1 p-8 bg-white">

<?php if ($menu === 'kegiatan'): ?>

<h1 class="text-2xl font-bold mb-4">CRUD Kegiatan</h1>

<form method="POST" class="grid grid-cols-2 gap-3 mb-6">
    <input type="text" name="nama" placeholder="Nama Kegiatan" class="border p-2" required>
    <input type="text" name="tanggal" placeholder="Tanggal (contoh: 12 Agustus 2025)" class="border p-2" required>
    <button name="simpan_kegiatan" class="col-span-2 bg-blue-600 text-white p-2 rounded">
        Simpan
    </button>
</form>

<table class="w-full border">
    <tr class="bg-gray-100">
        <th class="p-2">Kegiatan</th>
        <th class="p-2">Tanggal</th>
        <th class="p-2">Aksi</th>
    </tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM kegiatan");
while ($k = mysqli_fetch_assoc($data)):
?>
    <tr>
        <td class="p-2"><?= $k['nama_kegiatan'] ?></td>
        <td class="p-2"><?= $k['tanggal'] ?></td>
        <td class="p-2">
            <a href="?menu=kegiatan&aksi=hapus_kegiatan&id=<?= $k['id'] ?>" class="text-red-500 hover:underline">
                Hapus
            </a>
        </td>
    </tr>
<?php endwhile; ?>
</table>

<?php elseif ($menu === 'jadwal'): ?>

<h1 class="text-2xl font-bold mb-4">CRUD Jadwal Kuliah</h1>

<form method="POST" class="grid grid-cols-3 gap-3 mb-6">
    <input name="kelas" placeholder="Kelas" class="border p-2" required>
    <input name="hari" placeholder="Hari" class="border p-2" required>
    <input name="matakuliah" placeholder="Mata Kuliah" class="border p-2" required>
    <input name="waktu" placeholder="Waktu" class="border p-2" required>
    <input name="ruang" placeholder="Ruang" class="border p-2" required>
    <input name="dosen" placeholder="Dosen" class="border p-2" required>

    <button name="simpan_jadwal" class="col-span-3 bg-green-600 text-white p-2 rounded">
        Simpan
    </button>
</form>

<table class="w-full border text-sm text-center">
    <tr class="bg-gray-100">
        <th>Kelas</th>
        <th>Hari</th>
        <th>MK</th>
        <th>Waktu</th>
        <th>Ruang</th>
        <th>Dosen</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM jadwal_kuliah");
while ($j = mysqli_fetch_assoc($data)):
?>
    <tr>
        <td><?= $j['kelas'] ?></td>
        <td><?= $j['hari'] ?></td>
        <td><?= $j['matakuliah'] ?></td>
        <td><?= $j['waktu'] ?></td>
        <td><?= $j['ruang'] ?></td>
        <td><?= $j['dosen'] ?></td>
        <td>
            <a href="?menu=jadwal&aksi=hapus_jadwal&id=<?= $j['id'] ?>" class="text-red-500 hover:underline">
                Hapus
            </a>
        </td>
    </tr>
<?php endwhile; ?>
</table>

<?php endif; ?>

</main>
</div>
</body>
</html>
