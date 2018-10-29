<?php
    require("class.php");
    $nim = $_GET['id'];
    $sql = $data -> data_mhs($nim);
    $row = $sql -> fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="class.php?edit=<?php echo $nim;?>" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim']?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl" value="<?php echo $row['tanggal_lahir']?>"></td>    
            </tr>
            <tr><input type="submit" value="Submit"></tr>
        </form>
        <a href="data.php">lihat data</a>
    </body>
</html>
