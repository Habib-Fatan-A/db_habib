<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat parkir</title>
</head>
<body>
    <h1>Tambah list baru</h1>
    <form action = "simpan.php"method="POST">
        <label for="">id parkir</label>
        <input type="number" name="id_parkir">
        <br>
        <label for="">tanggal parkir</label>
        <input type="text" name="tanggal_parkir">
        <br>
        <label for="">harga parkir</label>
        <input type="text" name="harga_parkir">
        <br>
        <label for="">alamat parkir</label>
        <input type="text" name="alamat_parkir">
        <br>
        <button type="submit">tambahkan</button>
 </form>
</body>
</html>