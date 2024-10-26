<br><h1 class="ep">Edit Profil</h1><br>
<div class="edit-pfl">
<form action="<?= base_url(); ?>profil/updateProfil" method="post">
    <input type="hidden" name="id" >
    <input type="text" name="nama" placeholder="Nama" value="<?= $user['nama']?>"> <br><br>
    <input type="text" name="username" placeholder="Username" value="<?= $user['username']?>"><br><br>
    <input type="password" name="password" placeholder="Password" value="<?= $user['password']?>"><br><br>
    <!-- value disamakan yg didatabase -->
    <input type="submit" value="Edit Profil">
</form>
</div>