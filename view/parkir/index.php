<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempat parkir</title>
</head>
<body>
    <h1>Data list Baru</h1>
    <a href="tambah.php">tambahan parkir</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>id parkir</th>
            <th>tanggal parkir</th>
            <th>harga parkir</th>
            <th>alamat parkir</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM parkir");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "Data ada";
            while($result=mysqli_fetch_assoc($query)){
             ?>                   
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $result['id_parkir'] ?></td>
            <td><?php echo $result['tanggal_parkir'] ?></td>
            <td><?php echo $result['harga_parkir'] ?></td>
            <td><?php echo $result['alamat_parkir'] ?></td>
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