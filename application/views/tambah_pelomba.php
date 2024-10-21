<h1 class="hl-pndftrn">Pendaftaran</h1>
<div class="tambah-pelomba">

    <form action="tambah_pelomba/tambah" method="post">
        <select name="nama_lomba">
                <option value="">Jenis Lomba</option>
                <?php foreach ($jns_lomba as $lmb) : ?>
                    <option value="<?= $lmb['id']?>"><?= $lmb['nama_lomba']?></option>
                <?php endforeach; ?>
           </select><br><br>
        <input type="text" name="nama_pendaftar" placeholder="Masukkan Nama Lengkap"><br><br>
        <input type="text" name="kelas" placeholder="Masukkan Kelas"><br><br>
        <input type="text" name="no_hp" placeholder="Masukkan No.HP"><br><br>
        <input type="date" name="tgl_daftar" placeholder="Masukkan Tanggal Daftar"><br><br>

        <input type="submit" value="Daftar Lomba">
    </form>
</div>