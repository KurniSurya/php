<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
</head>
<body>
    <?php
    // koneksi ke database
    include_once('config.php');

    // coding query untuk panggil data dari database (READ)
    $result=mysqli_query($mysqli, 'SELECT *FROM mahasiswa ORDER BY id DESC');

    ?>
    <a href="tambah_mahasiswa.php">tambah mahasiswa</a> <br><br>


    <table border="1">
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>prodi</th>
            <th>aksi</th>
        </tr>
        <tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)){

            
            ?>
            <td><?php echo $user_data['nim']; ?></td>
            <td><?php echo $user_data['nama']; ?></td>
            <td><?php echo $user_data['prodi']; ?></td>
            <td><a href="edit_mahasiswa.php?id=<?php echo $user_data['id']; ?>">edit</a></td>
            
        </tr>
    <?php
    }
    ?>
    </table>
    
    

</body>
</html>