<?php
// Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
if(!$koneksi){
    die('Koneksi gagal: ' . mysqli_connect_error());
}
// Ambil data dari database

$result = mysqli_query($koneksi, 'SELECT * FROM data_mahasiswa');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center;
}
        th { background-color: #f2f2f2; }
        input, button { padding: 6px; }
    </style>
</head>
<body>
<h1>Manajemen Data Mahasiswa</h1>

<form action='/deklaratif-4/insert.php' method="post">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <label>Usia:</label>
    <input type="number" name="usia" required>
    <label>Program Studi:</label>
    <input type="text" name="program_studi" required>
    <button type="submit" name="simpan">Simpan</button>
</form>

<h2>Daftar Data Mahasiswa</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Program Studi</th>
    </tr>
    <?php
    $no = 1;
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['Nama']}</td>
                <td>{$row['Usia']}</td>
                <td>{$row['program_studi']}</td>
                </tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>