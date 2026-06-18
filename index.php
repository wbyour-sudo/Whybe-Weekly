<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1 align="center">WEB TI UNIMUS 2026</h1>

    <!-- Tabel Navigasi -->
    <table align="center">
        <tr>
            <td><a href="index.html">Home</a></td>
            <td><a href="profil.html">Profil</a></td>
            <td><a href="kontak.html">Kontak</a></td>
            <td><a href="mahasiswa.html">Data Mahasiswa</a></td>
        </tr>
    </table>

    <!-- Data Mahasiswa dibungkus Div agar styling box muncul -->
    <div class="data-container">
        <h2>Nama : Yanuar Eka Arifiyanto</h2> 
        <h2>Nim  : 13242520002</h2>
        <h2>Asal : Wonosobo</h2> 
    </div>
    </form>

</body>
    Nama: <br>
    <input type="text" name="nama"><br><br>

    NIM: <br>
    <input type="number" name="nim"><br><br>

    Password: <br>
    <input type="password" name="password"><br><br>

    Email: <br>
    <input type="email" name="email"><br><br>

    No HP: <br>
    <input type="tel" name="hp"><br><br>

    Website Pribadi: <br>
    <input type="url" name="website"><br><br>

    Tanggal Lahir: <br>
    <input type="date" name="tanggal_lahir"><br><br>

    Warna Favorit: <br>
    <input type="color" name="warna"><br><br>

    Tingkat Kepuasan: <br>
    <input type="range" name="kepuasan" min="0" max="100"><br><br>

    Jenis Kelamin: <br>
    <input type="radio" name="jk" value="laki"> Laki-laki
    <input type="radio" name="jk" value="perempuan"> Perempuan<br><br>

    Hobi: <br>
    <input type="checkbox" name="hobi" value="musik"> Musik
    <input type="checkbox" name="hobi" value="olahraga"> Olahraga
    <input type="checkbox" name="hobi" value="game"> Game<br><br>

    Upload Foto: <br>
    <input type="file" name="foto"><br><br>

    Alamat: <br>
    <textarea name="alamat"></textarea><br><br>

    Jurusan: <br>
    <select name="jurusan">
        <option value="">-- Pilih Jurusan --</option>
        <option value="TI">Teknologi Informasi</option>
        <option value="SI">Sistem Informasi</option>
        <option value="DKV">Desain Komunikasi Visual</option>
    </select><br><br>

    <input type="submit" value="Submit">
    </form>
</body>
</html>