<div class="container mt-3">
    <h3 class="mb-3">Tambah Barang</h3>
    <form action="<?= base_url('home/tambah'); ?>" method="POST">
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang" value="<?= set_value('kode_barang'); ?>" autocomplete="off">
            <?= form_error('kode_barang'); ?>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" value="<?= set_value('nama_barang'); ?>" autocomplete="off">
            <?= form_error('nama_barang'); ?>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga barang" value="<?= set_value('harga'); ?>" autocomplete="off">
            <?= form_error('harga'); ?>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan stok barang" value="<?= set_value('stok'); ?>" autocomplete="off">
            <?= form_error('stok'); ?>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan"><?= set_value('keterangan'); ?></textarea>
            <?= form_error('keterangan'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
    </form>
</div>