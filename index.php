<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <!-- Memasukkan library Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 style = "text-align:center;">FORM PENDAFTARAN NASABAH</h1>
        <div  class="card">
            <div style="padding-bottom:20px;" class="card-header">
                <h5>Petunjuk Pengisian Form</h5>
            </div>
            <div class="card-body">
                <p>
                    1. Isi semua form sesuai dengan yang diminta.
                </p>
                <p>
                    2. Pastikan data yang sesuai dengan data diri anda.
                </p>
                <p>
                    3. Setelah semua terisi silahkan tekan "Daftar" untuk mendaftarakan diri.
                </p>
                <p>
                    4. Untuk mencari data tekan "Cari Data".
                </p>
        </div>
        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                <small id="namaHelp" class="form-text text-muted">Masukkan nama lengkap Anda.</small>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <small id="emailHelp" class="form-text text-muted">Masukkan alamat email yang valid.</small>
            </div>

            <div class="form-group">
                <label for="nohp">No Handphone</label>
                <input type="nohp" class="form-control" id="nohp" name="nohp" required>
                <small id="nohpHelp" class="form-text text-muted">Masukkan Nomor Handphone yang dapat dihubungi.</small>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" required>
                <small id="alamatHelp" class="form-text text-muted">Masukan alamat sesuai dengan tempat tinggal.</small>
            </div>

            

            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="search.php" class="btn btn-primary">Cari Data</a>
        </form>
    </div>

    <!-- Memasukkan script JavaScript Bootstrap (opsional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</body>
</html>
