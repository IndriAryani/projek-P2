<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <h1>Edit Data Event</h1>
    <div class="edit">
        <form action="<?= base_url() ?>admin/update" method="post">
        <input type="text" name="id" value="<?= $edit['id']?>"><br><br>
            <select name="jns_lomba">
                <option>pilih jenis lomba</option>

                <?php foreach($jns_lomba as $jl) :?>
                    <option value="<?= $jl['id']?>"><?= $jl['jns_lomba']?></option>
                <?php endforeach; ?>
                
            </select><br><br>
            <input type="text" name="nama" value="<?= $edit['nama']?>"><br><br>
            <input type="text" name="kelas"><br><br>
            <input type="text" name="no_hp"><br><br>
            <input type="text" name="tgl_daftar"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>
</body>
</html>