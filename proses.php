<?php

//include koneksi database
include('koneksi.php');
require('tester.php');
$key = "KEY";
//get data dari form
$nid    = random_int(1000,10000);
$nama   = vigenereEncrypt($_POST['nama'],$key);
$email   = vigenereEncrypt($_POST['email'],$key);
$nohp   = $_POST['nohp'];
$alamat   = vigenereEncrypt($_POST['alamat'],$key);

//$aNama = encrypt($nama);

//query insert data ke dalam database
$query = "INSERT INTO nasabah (nid, nama, email, nohp, alamat) VALUES ('$nid','$nama', '$email', '$nohp', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php
    ?>
    <script>
        Swal.fire({
            title: "The Internet?",
            text: "That thing is still around?",
            icon: "success"
        });
    </script>
    <?php
    header("location: index.php");
    

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>