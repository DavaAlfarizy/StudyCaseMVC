<div class="container">
<h3 class="mb-3">Tambah data pinjaman</h3>
<form action="<?= BASE_URL; ?>/barang/simpanbarang" method="post">
<div class="class-body">
<div class="form-group mb-3">
<label for="nama_peminjam ">nama peminjam</label>
<input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
</div>
<div class="form-group mb-3">
        <label for="">Jenis Barang :</label>
        <select class="form-control" name="jenis_barang">
        <option value="Laptop" >Laptop</option>
        <option value="HP" >HP</option>
        <option value="Adaptor LAN" >AdaptorLAN</option>
        </select>
    </div>
<div class="form-group mb-3">
<label for="no_barang">no barang</label>
<input type="number" class="form-control" id="no_barang" name="no_barang">
</div>
<div class="form-group mb-3">
<label for="tgl_pinjam">tanggal pinjam</label>
<input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>