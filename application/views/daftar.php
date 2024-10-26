<h1 class="hl-reg">Halaman Registrasi</h1><br>
    <div class="hlmn-reg">
        <form action="<?= base_url() ?>daftar/simpan" method="post">
            <input type="text" name="nama" placeholder="masukkan nama"><br><br>
            <input type="text" name="username" placeholder="masukkan username"><br><br>
            <input type="password" name="password" placeholder="masukkan password"><br><br>

            <input type="submit" value="simpan">
        </form>
    </div>