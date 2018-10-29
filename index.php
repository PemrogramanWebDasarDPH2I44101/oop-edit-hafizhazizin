<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="class.php?tambah=mahasiswa" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl" id=""></td>    
            </tr>
            <tr><input type="submit" value="Submit"></tr>
        </form>
        <a href="data.php">lihat data</a>
    </body>
</html>
