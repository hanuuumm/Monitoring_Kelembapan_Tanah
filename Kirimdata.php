<?php
    $konek = mysqli_connect("localhost", "root", "", "monitoring");
    $kelembaban = $_GET['kelembaban'];
     
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //simpan nilai sensor ke dalam db
    $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(kelembaban) VALUES ('$kelembaban')");

    //respon ke NODEMCU
    if ($simpan) 
        echo"BERHASIL TERSIMPAN";
    else
        echo "GAGAL TERSIMPAN";
?>