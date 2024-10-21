<h1>Edit Data Lomba</h1>
    <div class="edit-lmb">
        <form action="<?= base_url() ?>data_event/update" method="post">
            <input type="hidden" name="id" value="<?= $edit['id']?>"><br><br>
            <input type="text" name="nama_lomba" value="<?= $edit['nama_lomba']?>"><br><br>
            <input type="text" name="penyelenggara" value="<?= $edit['penyelenggara']?>"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>