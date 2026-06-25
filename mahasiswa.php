<?php
    require 'fungsi.php';
    $query = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - TI UNIMUS</title>

     <link rel="stylesheet" href="asset/style.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body class="mahasiswa-page">

    <header>
        <h1>WEB TI UNIMUS</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="profil.php">About</a>
            <a href="kontak.php">Contact</a>
            <a href="mahasiswa.php">Data Mahasiswa</a>
        </nav>

    </header>

    <main>
        <h2>Data Mahasiswa</h2>

            <a href="tambahdata.php" class="btn-tambah">
            + Tambah Data
            </a>

        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php
                $no = 1;
                foreach ($mahasiswas as $mhs)
                {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>
                <td>
                    <img src="assets/images/<?= $mhs['foto']; ?>" alt="<?= $mhs['nama']; ?>"
                         width="100">
                </td>
                <td>
                    <a href="editdata.php?id=1" class="btn-edit">
                    Edit
                    </a>

                    <a href="hapusdata.php?id=1" class="btn-hapus"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                    </a>
                </td>
            </tr>

            <?php
                };
            ?>

        </table>
    </main>

    <br><br>

    <footer align="center">
        <p>&copy; 2026 TI UNIMUS</p>
    </footer>

</body>
</html>