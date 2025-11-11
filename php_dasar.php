<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP dasar</h1>
    <?php 
        echo "Hello World!";
    ?>
    <h1>Menggunakan Variable</h1>
    <?php 
        $nim = "312410425";
        $nama = "Fathan";
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php 
        echo 'Selamat Datang ' . $_POST['nama'] . '!';
    ?>
</body>
</html>