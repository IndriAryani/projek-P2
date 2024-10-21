<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <h1>Edit Data Pendaftaran</h1>
    <div class="edit-pndftr">
        <form action="<?= base_url('admin/update')?>" method="post">
           <select name="pelomba">
                <option value="">Jenis Lomba</option>
                <?php foreach ($jns_lomba as $lmb) : ?>
                    <option value="<?= $lmb['id']?>"><?= $lmb['nama_lomba']?></option>
                <?php endforeach; ?>
           </select><br><br>
            <input type="text" name="nama_pendaftar" value="<?= $edit['nama_pendaftar'];?>"><br><br>
            <input type="text" name="kelas" value="<?= $edit['kelas'];?>"><br><br>
            <input type="text" name="no_hp" value="<?= $edit['no_hp'];?>"><br><br>
            <input type="text" name="tgl_daftar" value="<?= $edit['tgl_daftar'];?>"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>
</body>
</html>