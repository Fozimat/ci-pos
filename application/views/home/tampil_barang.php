<div class="container mt-3">
    <h3>Daftar Barang</h3>
    <a class="btn btn-success" href="<?= base_url('home/tambah'); ?>">Tambah Data</a>
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
                    <td><?= $no++; ?></td>
                    <td><?= $d->kode_barang; ?></td>
                    <td><?= $d->nama_barang; ?></td>
                    <td class="text-center"><?= $d->harga; ?></td>
                    <td class="text-center"><?= $d->stok; ?></td>
                    <td><?= $d->keterangan; ?></td>
                    <td class="text-center">
                        <a href="#" class="badge badge-primary">Edit</a> |
                        <a href="#" class="badge badge-danger">Delete</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>