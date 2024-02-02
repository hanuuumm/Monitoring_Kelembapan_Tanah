<?php
    //koneksi
    $konek = mysqli_connect("localhost", "root", "", "monitoring");

    // Periksa koneksi
    if ($konek->connect_error) {
        die("Koneksi gagal: " . $konek->connect_error);
    }

    // Query untuk mengambil 10 data terbaru dari kelembaban tanah
    $sql = "SELECT tanggal, kelembaban FROM tb_sensor ORDER BY id DESC LIMIT 15";
    $result = $konek->query($sql);

    // Mengubah hasil query menjadi array untuk digunakan oleh JavaScript
    $dataKelembaban = [];
    while ($row = $result->fetch_assoc()) {
        $dataKelembaban[] = [
            'tanggal' => $row['tanggal'],
            'kelembaban' => $row['kelembaban'],
        ];
    }

    // Menutup koneksi
    $konek->close();

    // Mengirimkan data dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($dataKelembaban);
?>
