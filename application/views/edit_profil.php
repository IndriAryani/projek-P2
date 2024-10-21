<h2>Edit Profil</h2>
<form action="<?= base_url(); ?>profil/updateProfil" method="post">
    <input type="hidden" name="id" ><br><br>
    <input type="text" name="nama" placeholder="Nama" value="<?= $edit['nama']?>"> <br><br>
    <input type="text" name="username" placeholder="Username" value="<?= $edit['username']?>"><br><br>
    <input type="password" name="password" placeholder="Password" value="<?= $edit['password']?>"><br><br>
    <!-- value disamakan yg didatabase -->
    <input type="submit" value="Edit Profil">
</form>