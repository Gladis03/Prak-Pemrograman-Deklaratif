<?php
// Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
if(!$koneksi){
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Jika tombol simpan ditekan
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $program_studi = $_POST['program_studi'];

    $sql = "INSERT INTO data_mahasiswa (nama, usia, program_studi) VALUES ('$nama', '$usia', '$program_studi')";
    mysqli_query($koneksi, $sql);
}

header('Location: /deklaratif-4/index.php');

exit;