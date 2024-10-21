<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body><br>
    <h1 class="hlmn-daftar">Halaman Pendaftaran</h1><br>

     <table border="1" class="event">
        <tr>
            <th>ID</th>
            <th>NAMA LOMBA</th>
            <th>NAMA PENDAFTAR</th>
            <th>KELAS</th>
            <th>NO. HP</th>
            <th>TANGGAL DAFTAR</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($pendaftaran as $pdf) : ?>
        <tr>
            <td> <?= $pdf['id'] ?> </td>
            <td> <?= $pdf['nama_lomba'] ?> </td>
            <td> <?= $pdf['nama_pendaftar'] ?> </td>
            <td> <?= $pdf['kelas'] ?> </td>
            <td> <?= $pdf['no_hp'] ?> </td>
            <td> <?= $pdf['tgl_daftar'] ?> </td>
            <td class="t-edit"> <a href="<?= base_url(); ?>admin/edit/<?= $pdf['id']?>">edit</a> </td>
            <td class="t-hapus"> <a onclick="return confirm('Are u sure want to delete this?')" 
             href="<?= base_url(); ?>admin/hapus/<?= $pdf['id']?>">hapus</a> </td>
        </tr>
        <?php endforeach; ?>
    </table><br>
    <a class="tombol-daftar" href="<?php echo base_url(); ?>tambah_pelomba">Tambah Data</a>
</body>
</html>
