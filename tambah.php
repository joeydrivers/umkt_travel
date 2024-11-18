
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Penumpang Travel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
        <h2>Pendataan Penumpang Travel</h2>
        <form method="post" action="tampilkan-tambah.php">
            <div class="form-group">
                <label for="nama">Nama Penumpang:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required >
            </div>
            <div class="form-group">
                <label for="asal">Asal Keberangkatan:</label>
                <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan Asal Keberangkatan" required>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan Keberangkatan:</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukkan Tujuan Keberangkatan" required>
            </div>
            <div class="form-group">
                <label for="jam">Jam Keberangkatan:</label>
                <input type="time" class="form-control" id="jam" name="jam" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Keberangkatan:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
