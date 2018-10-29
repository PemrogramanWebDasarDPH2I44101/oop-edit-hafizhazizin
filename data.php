<?php
require("class.php");
?>
<form method="post">
</form>
    <table border="1">
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Tanggal Lahir</th>
        <?php
        $no=1;
        $result = $data ->lihat_data();
        while($row =$result -> fetch(PDO :: FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['tanggal_lahir'];?></td>
            <td><a href="class.php?delete=<?php echo $row['nim']?>">Hapus</a></td>
            <td><a href="edit.php?id=<?php echo $row['nim'];?>">Edit</a></td>
    </tr>
        <?php
             $no++;
     }
         ?>        
</table>
<a href="data.php">lihat data</a>
