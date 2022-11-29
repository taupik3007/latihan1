<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $id = $_GET['id'];
   
    include 'coba2.php';
    $data = mysqli_query($koneksi,"SELECT * FROM `coba` WHERE `id` = $id ");
    $tampil = mysqli_fetch_array($data);
    
    
    
    ?>




    <form action="update.php" method="post">
        <input type="text" name="id" hidden=""  value="<?php echo $tampil['id'];?>" >
        <input type="text" name="nama" value="<?php echo $tampil['nama'];?>">
        <input type="text" name="kelas" value="<?php echo $tampil['kelas'];?>">
        <input type="text" name="nilai" value="<?php echo $tampil['nilai'];?>">
      
        <input type="submit" value="kirim">



    </form>

    
</body>
</html>




