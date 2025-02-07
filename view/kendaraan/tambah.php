<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat parkir</title>
</head>
<body>
    <h1>Tambah list Baru</h1>
    <form action = "simpan.php"method="POST">
        <label for="">id kendaraan</label>
        <input type="number" name="id_kendaraan">
        <br>
        <label for="">no plat</label>
        <input type="text" name="no_plat">
        <br>
        <label for="">id parkir</label>
        <input type="text" name="id_parkir">
        <br>
        <label for="">jenis kendaraan</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <button type="submit">tambahkan</button>
 </form>
</body>
</html>