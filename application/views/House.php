<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to PollutInfo</h2>
    <h3>Web Quest Using CI</h3>
    <a href="<?php echo base_url()."index.php/hal_admin/baca_form"; ?>">Nambah Data</a><br><br>
    <table border='1'>
    <tr>
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    <?php
        foreach($yourData as $dat){
    ?>
        <tr>
            <td><?php echo $dat['nama']; ?></td>
            <td><?php echo $dat['nim']; ?></td>
            <td><?php echo $dat['alamat']; ?></td>
            <td><a href="<?php echo base_url()."index.php/hal_admin/hapus_data/".$dat['no']; ?>">Hapus</a> |
            <a href="<?php echo base_url()."index.php/hal_admin/takeData/".$dat['no']; ?>">Update</a></td>
        </tr>    
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/page_1/"; ?>">Logout</a>        
</body>
</html>