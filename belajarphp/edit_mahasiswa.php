<!DOCTYPE html>

<?php
// panggil koneksi database
include_once('config.php');

if (isset($_POST['update'])){
    $id = $_POST['input_id'];
    $nim = $_POST['input_nim'];
    $nama = $_POST['input_nama'];
    $prodi = $_POST['input_prodi'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id='$id'" );

    // rederect menuju halaman home
    header('location: home.php');
}
?>

<?php
// ambil dari url
$id = $_GET['id'];

// panggil data dari database berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");

while  ($user_data = mysqli_fetch_array($result)){
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $prodi = $user_data['prodi'];
}
?>

<html lang="en">
<head>
    <title>edit data mahasiswa</title>
</head>
<body>
    <pre>
    <form action="edit_mahasiswa.php" method="post" name="update_user">
        <label>nim      : </label><input type="text" name="input_nim" value="<?php echo $nim; ?>"><br>
        <label>nama     : </label><input type="text" name="input_nama" value="<?php echo $nama; ?>"><br>
        <label>prodi    : </label><input type="text" name="input_prodi" value="<?php echo $prodi; ?>"><br>
        <input type="submit" value="UPDATE" name="update">
        <input type="hidden" name="input_id" value="<?php echo $_GET['id']; ?>" >
        <a href="home.php"><< kembali</a>
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