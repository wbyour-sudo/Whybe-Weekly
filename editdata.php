<?php
require 'fungsi.php';

$id = $_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mhs = tampildata($query)[0];

if (isset($_POST["submit"])) {

    if (editdata($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diedit');
            document.location.href='mahasiswa.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diedit');
            document.location.href='editdata.php?id=$id';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<nav>
    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="about.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            <td><a href="form.php">Form</a></td>
        </tr>
    </table>
</nav>

<h2>Edit Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <table>

        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" required value="<?= $mhs['nama']; ?>">
            </td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>
                <input type="number" name="nim" required value="<?= $mhs['nim']; ?>">
            </td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>
                <input type="text" name="prodi" required value="<?= $mhs['prodi']; ?>">
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" required value="<?= $mhs['email']; ?>">
            </td>
        </tr>

        <tr>
            <td>Nomor HP</td>
            <td>
                <input type="number" name="no_hp" required value="<?= $mhs['no_hp']; ?>">
            </td>
        </tr>

        <tr>
            <td>Foto</td>
            <td>
                <input type="file" name="foto" value="<?= $mhs['foto']; ?>">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit">Edit</button>
                <a href="mahasiswa.php">Kembali</a>
            </td>
        </tr>

    </table>

</form>

</body>
</html>