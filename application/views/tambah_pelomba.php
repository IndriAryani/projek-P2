<br><h1 class="hl-pndftrn">Pendaftaran</h1>
    <form class="form"action="tambah_pelomba/tambah" method="post">
        <select class="select" name="nama_lomba">
                <option value="">Jenis Lomba</option>
                <?php foreach ($jns_lomba as $lmb) : ?>
                    <option value="<?= $lmb['id']?>"><?= $lmb['nama_lomba']?></option>
                <?php endforeach; ?>
           </select><br><br>
        <input class="nama-lngkp" type="text" name="nama_pendaftar" placeholder="Masukkan Nama Lengkap"><br><br>
        <input class="kelas" type="text" name="kelas" placeholder="Masukkan Kelas"><br><br>
        <input class="no-hp" type="text" name="no_hp" placeholder="Masukkan No.HP"><br><br>
        <input class="tgl-dftr" type="date" name="tgl_daftar" placeholder="Masukkan Tanggal Daftar"><br><br>

        <input class="submit" type="submit" value="Daftar Lomba">
    </form>