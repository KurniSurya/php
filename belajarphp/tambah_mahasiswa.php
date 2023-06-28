<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>
<body>
    <a href="home.php">home</a>
    <pre>
    <form action="tambah_mahasiswa.php" method="post">
        <label>nim      : </label><input type="text" name="input_nim"><br>
        <label>nama     : </label><input type="text" name="input_nama"><br>
        <label>prodi    : </label><input type="text" name="input_prodi"><br>
        <input type="submit" value="simpan" name="submit">
    </form>
    </pre>

    <?php
    // apakah data sudah lengkap
    if(isset($_POST['submit'])){
        $nim=$_POST['input_nim'];
        $nama=$_POST['input_nama'];
        $prodi=$_POST['input_prodi'];

        // panggil file koneksi database
        include_once('config.php');

        // coding query untuk simpanke database
        $result=mysqli_query($mysqli, "INSERT INTO mahasiswa(nim, nama, prodi) VALUES('$nim', '$nama', '$prodi')");
    
        // notifikasi data berhasil di simpan
        echo'data berhasil disimpan';
    }
    ?>
</body>
</html>