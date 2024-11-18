<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
        $asal = $_POST["asal"];
        $tujuan = $_POST["tujuan"];
        $jam = $_POST["jam"];
        $tanggal = $_POST["tanggal"];
        $telepon = $_POST["telepon"];

    $result = mysqli_query($conn, "INSERT into penumpang values('','$nama','$asal','$tujuan','$jam','$tanggal','$telepon')");

    if ($result) {
        echo "<script>
            alert('data berhasil ditambahkan');
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penumpang - Travel Express</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">UMKT Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.html">Kontak</a>
                </li>
            </ul>
        </div>
        </nav>

    <div class="container">
    <h2>Data Penumpang UMKT Travel</h2>
    <?php
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $asal = $_POST["asal"];
        $tujuan = $_POST["tujuan"];
        $jam = $_POST["jam"];
        $tanggal = $_POST["tanggal"];
        $telepon = $_POST["telepon"];
    ?>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>Asal Keberangkatan</th>
                <td><?php echo $asal; ?></td>
            </tr>
            <tr>
                <th>Tujuan Keberangkatan</th>
                <td><?php echo $tujuan; ?></td>
            </tr>
            <tr>
                <th>Jam Keberangkatan</th>
                <td><?php echo $jam; ?></td>
            </tr>
            <tr>
                <th>Tanggal Keberangkatan</th>
                <td><?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td><?php echo $telepon; ?></td>
            </tr>
        </table>
    <?php
    } else {
        echo "Data belum diisi.";
    }
    ?>

    <a href="index.html" class="btn btn-primary">KEMBALI</a> 
</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>