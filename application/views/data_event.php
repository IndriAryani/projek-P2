<table border="1" class="column-event">
        <tr>
            <th>NO</th>
            <th>NAMA EVENT</th>
            <th>PENYELENGGARA</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php $i=1;?>
        <?php foreach ($jns_lomba as $jl) : ?>
        <tr>
            <td> <?= $i;?> </td>
            <td> <?= $jl['nama_lomba'] ?> </td>
            <td> <?= $jl['penyelenggara'] ?> </td>
            <td class="t-edit"> <a href="<?= base_url(); ?>data_event/edit/<?= $jl['id_jns']?>">edit</a> </td>
            <td class="t-hapus"> <a onclick="return confirm('Are u sure want to delete this?')" href="<?= base_url(); ?>data_event/hapus/<?= $jl['id_jns']?>">hapus</a> </td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
    <a class="tombol-jenis" href="<?php echo base_url(); ?>tambah_lomba">Tambah Data</a>