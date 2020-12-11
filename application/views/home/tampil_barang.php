<div class="container mt-3" style="min-height: 100vh!important;">
    <h3>Daftar Barang</h3>
    <a class="btn btn-success mb-3" href="<?= base_url('home/tambah'); ?>">Tambah Data</a>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <table id="example" class="table table-bordered table-striped mt-3 mx-auto">
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
                    <td class="text-right"><?= $d->stok; ?>
                        <a href="javascript:;" data-toggle="modal" data-target="#tambahStok" class="badge badge-warning" data-id="<?= $d->id_barang; ?>" data-stok="<?= $d->stok; ?>">+ Stok</a>
                    </td>
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

<!-- Modal -->
<div class="modal fade" id="tambahStok" tabindex="-1" role="dialog" aria-labelledby="tambahStokLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahStokLabel">Tambah Stok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('home/tambahStok'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $d->id_barang; ?>">
                    <div class="form-group">
                        <label class="font-weight-bold" for="stok">Stok</label>
                        <input type="text" class="form-control-plaintext" id="stok" name="stok" placeholder="Masukkan stok..." autocomplete="off" readonly>
                        <?= form_error('stok'); ?>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="stok_baru">Stok baru</label>
                        <input type="number" class="form-control" id="stok_baru" name="stok_baru" placeholder="Masukkan stok baru..." autocomplete="off">
                        <?= form_error('stok_baru'); ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();

        $('#tambahStok').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget);
            var modal = $(this);

            // $('#stok').prop('disabled', true);

            modal.find('#id').attr("value", div.data('id'));
            modal.find('#stok').attr("value", div.data('stok'));
        });
    });
</script>