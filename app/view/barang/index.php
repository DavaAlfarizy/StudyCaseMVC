<div class="container">
<h3 class="mb-3">List Peminjaman</h3>
<br>
<a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-primary">Tambah data pinjaman</a>
<br>
<br> 
<div class="d-flex" justify-content-beetween style="float:right">
    <form action="<?= BASE_URL; ?>/barang/cari" method="post" class="d-flex">
        <input type="text" class="form-control" name="search">
        <button type="submit" class="btn btn-primary" style="margin-left: 5px ;">Search</button>
    </form>
    <a href="<?= BASE_URL ?>/barang/index/" class="btn btn-secondary" style="margin-left: 5px;">Reset</a>
    </div>
    <br>
<br> 
<table class="table table success table-striped table-bordered">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama peminjam</th>
<th scope ="col">Jenis Barang</th>
<th scope="col">Nomor Barang</th>
<th scope="col">Tanggal Pinjam </th>
<th scope="col">Tanggal Kembali </th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1; ?>

<?php date_default_timezone_set("asia/jakarta"); 
            $currentDate = date('Y-m-d H:i:s'); 
    ?>
<?php  foreach ($data['barang'] as $row) :
    $tglKembali = $row['tgl_kembali'];
    $status = ($tglKembali < $currentDate) ? 'Sudah Kembali' : $row['status'];
    ?>

    <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_peminjam']; ?></td>
        <td><?= $row['jenis_barang']; ?></td>
        <td><?= $row['no_barang']; ?></td>
        <td><?= $row['tgl_pinjam']; ?></td>
        <td><?= $tglKembali; ?></td>
        <td>
            <?php
            if ($status ==  'Sudah Kembali') {
                echo '<div class="btn btn-success text-white">Sudah Kembali</div>';
            } else {
                echo '<div class="btn btn-danger text-white">Belum Kembali</div>';
            }
            ?>
        </td>
        <td>
            <?php if ($status == 'Sudah Kembali') : ?>
                <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">
                    <i class=>Hapus</i>
                </a>
            <?php else : ?>
                <a href="<?= BASE_URL ?>/barang/edit/<?= $row['id'] ?>" class="btn btn-primary"><i class=></i>Edit</a>
                <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">
                    <i class=>Hapus</i>
                </a>
            <?php endif; ?>
        </td>
    </tr>
<?php
    $no++; endforeach;
?>

</tbody>
</table>
</div>