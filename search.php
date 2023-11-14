<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container topside">
            <h1 class="center">PENCARIAN DATA NASABAH</h1>
            <form action="search.php" method="GET">
                <div class="mb-3">
                    <label class="form-label">Masukan ID Nasabah</label>
                    <input type="text" class="form-control" name="nid" placeholder="Masukan ID Nasabah">
                </div>
                <button type="submit" class="btn btn-primary">Seacrh</button>
                <a href="index.php" class="btn btn-primary">Input Data</a>
            </form>
            <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NID</th>
                    <th scope="col">NAMA NASABAH</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NO HANDPHONE</th>
                    <th scope="col">ALAMAT</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        require('tester.php');
                        //$key = "KEY";
                        if(isset($_GET['nid'])){
                            $nid = $_GET['nid'];
                            $query    =mysqli_query($connection,"SELECT * FROM nasabah WHERE nid='$nid'");
                            $result   =mysqli_fetch_array($query);
                        }
                    ?>
                  <tr>
                      <td><?php echo $result['nid']; ?></td>
                      <td><?php echo $result['nama']; ?></td>
                      <td><?php echo $result['email']; ?></td>
                      <td><?php echo $result['nohp']; ?></td>
                      <td><?php echo $result['alamat']; ?></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>