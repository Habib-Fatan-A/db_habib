<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h1>Data parkir baru Baru</h1>
    <a href="tambah.php">tambahan parkir</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>id kendaraan</th>
            <th>nomor plat</th>
            <th>id parkir</th>
            <th>jenis kendaraan</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM kendaraan");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "Data ada";
            while($result=mysqli_fetch_assoc($query)){
             ?>                   
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $result['id_kendaraan'] ?></td>
            <td><?php echo $result['no_plat'] ?></td>
            <td><?php echo $result['id_parkir'] ?></td>
            <td><?php echo $result['jenis_kendaraan'] ?></td>
            <td>
                <a href="">Edit |</a>
                <a href="">Hapus</a>
            </td>
        </tr>
    <?php
    $no++;
    }
} else{
    echo "Data Kosong";
}
    ?>
    </table>
</body>
</html>
