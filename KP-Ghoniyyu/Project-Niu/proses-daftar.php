<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?

if (isset($_POST['save'])) {
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['skill_name'];
    $persen = $_POST['persen'];
    $warna = $_POST['warna'];

    $imageName = $_FILES["image"]["name"];
    $imageTemp = $_FILES["image"]["tmp_name"];

    // buat query update
    // buat query
    $query = mysqli_query($conn, "INSERT INTO skills(skill_name, persen, image, warna) VALUES('$nama', '$persen', '$imageName', '$warna')");
    // apakah query update berhasil?
    if ($query) {
        move_uploaded_file($imageTemp, "./img/" . $imageName);
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: skills.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>