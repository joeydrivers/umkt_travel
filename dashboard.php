<?php
require "koneksi.php";

$result = mysqli_query($conn,"select * from penumpang");
$penumpang =[];
while($row=mysqli_fetch_array($result)){
    $penumpang[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="dashboard">
        <main class="dash-container">
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
            <section class="dash-main">
            <h1>Data Penumpang</h1>
                <hr><br>
                <div class="leading-btn">
                <a href="tambah.php"> <button class="add-btn">Tambah</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($penumpang as $pg):?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $pg["nama"]?></td>
                            <td><?php echo $pg["asal"]?></td>
                            <td><?php echo $pg["tujuan"]?></td>
                            <td><?php echo $pg["jam"]?></td>
                            <td><?php echo $pg["tanggal"]?></td>
                            <td><?php echo $pg["telepon"]?></td>
                            <td class="action">
                                <a href="edit.php?id=<?=$pg['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="delete.php?id=<?=$pg['id']?>"><button class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>