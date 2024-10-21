<h1 class="hlmn-login">Halaman Login</h1><br>
    <div class="login">
    <?= $this->session->flashdata('message');?>
    <form action="<?= base_url()?>login/verifikasi" method="post"> 
        <input type="text" name="nama" placeholder="Masukkan Username"><br><br>
        <input type="password" name="passsword" placeholder="Masukkan Password"><br><br>

        <input type="submit" value="Login"><br><br>
        <p class="t-daftar">Bwelum punya akun yach? <a href="<?= base_url('daftar')?>">Daftar</a></p>

    </form>
</div>