<br><h1 class="edit-lomba">Edit Data Lomba</h1><br>
    <div class="edit-lmb">
        <form action="<?= base_url() ?>data_event/update" method="post">
            <input type="hidden" name="id_jns" value="<?= $edit['id_jns']?>">
            <input type="text" name="nama_lomba" value="<?= $edit['nama_lomba']?>"><br><br>
            <input type="text" name="penyelenggara" value="<?= $edit['penyelenggara']?>"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>