<body><br>
    <h1 class="h1edit">Edit Data Pendaftaran</h1><br>
    <div class="edit-pndftr">
        <form action="<?= base_url ('admin/update')?>" method="post">
        <select name="nama_lomba">
                <option value="">Jenis Lomba</option>
                <?php foreach ($jns_lomba as $lmb) : ?>
                    <option value="<?= $lmb['id_jns']?>"><?= $lmb['nama_lomba']?></option>
                <?php endforeach; ?>
           </select><br><br>
            <input type="text" name="nama_pendaftar" value="<?= $edit['nama_pendaftar']; ?>"><br><br>
            <input type="text" name="kelas" value="<?= $edit['kelas'] ?>"><br><br>
            <input type="text" name="no_hp" value="<?= $edit['no_hp'] ?>"><br><br>
            <input type="date" name="tgl_daftar" value="<?= $edit['tgl_daftar'] ?>"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>
</body>