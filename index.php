<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css"/>
    </head>
    <body>
        <div class="container topside">
            <h1 class="center">FORM INPUT NASABAH PERBANKAN</h1>
            <form action="proses.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Handphone</label>
                    <input type="text" class="form-control" name="nohp" placeholder="Masukan No Handphone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="search.php" class="btn btn-primary">Cari Data</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    </body>
</html>