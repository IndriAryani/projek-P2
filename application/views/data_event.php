<br><h1 class="data-event">Data Event</h1><br>
    
    <table border="1" class="column-event">
        <tr>
            <th>ID</th>
            <th>NAMA EVENT</th>
            <th>PENYELENGGARA</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($jns_lomba as $jl) : ?>
        <tr>
            <td> <?= $jl['id'] ?> </td>
            <td> <?= $jl['nama_lomba'] ?> </td>
            <td> <?= $jl['penyelenggara'] ?> </td>
            <td class="t-edit2"> <a href="<?= base_url(); ?>data_event/edit/<?= $jl['id']?>">edit</a> </td>
            <td class="t-hapus2"> <a onclick="return confirm('Are u sure want to delete this?')" href="<?= base_url(); ?>data_event/hapus/<?= $jl['id']?>">hapus</a> </td>
        </tr>
        <?php endforeach; ?>
    </table><br>
    <a class="tombol-jenis" href="<?php echo base_url(); ?>tambah_lomba">Tambah Data</a>