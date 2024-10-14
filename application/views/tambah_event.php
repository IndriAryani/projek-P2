<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelomba</title>
</head>
<body>
    <div class="tp"><h1>Tambah Pelomba</h1></div>

    <form action="<?= base_url(); ?>tambah_event/tambah">
        <input placeholder="masukkan id lomba" type="text" name="id_lomba"><br><br>
        <input placeholder="masukkan nama" type="text" name="nama"><br><br>
        <input placeholder="masukkan kelas" type="text" name="kelas"><br><br>
        <input placeholder="masukkan no hp" type="text" name="no_hp"><br><br>
        <input placeholder="masukkan tgl daftar" type="text" name="tgl_daftar"><br><br>

        <input type="submit" value="SIMPAN">
    </form>

</body>
</html>