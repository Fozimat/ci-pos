<div class="container mt-3">
    <h3>Daftar Barang</h3>
    <a class="btn btn-success mb-3" href="<?= base_url('home/tambah'); ?>">Tambah Data</a>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Barang berhasil <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <table class="table table-bordered table-striped mt-3 mx-auto">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data->result() as $d) : ?>
                <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td><?= $d->kode_barang; ?></td>
                    <td><?= $d->nama_barang; ?></td>
                    <td class="text-center"><?= $d->harga; ?></td>
                    <td class="text-center"><?= $d->stok; ?></td>
                    <td><?= $d->keterangan; ?></td>
                    <td class="text-center">
                        <a href="<?= site_url('home/edit/' . $d->id_barang); ?>" class="badge badge-primary">Edit</a> |
                        <a href="<?= site_url('home/hapus/' . $d->id_barang); ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>