<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Admin</h1>
    <h5>TABEL DATA EVENT</h5>
    <div class="tmbhevent">
    <a href="<?php echo base_url('tambah_event'); ?>">Tambah Data</a><br><br>
    </div>
    <table border="1" class="event">
        <tr>
            <th>ID LOMBA</th>
            <th>NAMA PENDAFTAR</th>
            <th>KELAS</th>
            <th>NO. HP</th>
            <th>TANGGAL DAFTAR</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($pendaftaran as $pdf) : ?>
        <tr>
            <td> <?= $pdf['id_lomba'] ?> </td>
            <td> <?= $pdf['nama_pendaftar'] ?> </td>
            <td> <?= $pdf['kelas'] ?> </td>
            <td> <?= $pdf['no_hp'] ?> </td>
            <td> <?= $pdf['tgl_daftar'] ?> </td>
            <td class="t-edit"> <a href="<?= base_url(); ?>admin/edit/<?= $pdf['id']?>">edit</a> </td>
            <td class="t-hapus"> <a onclick="return confirm('Are u sure want to delete this?')" href="<?= base_url(); ?>admin/hapus/<?= $pdf['id']?>">hapus</a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>