<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?= $this->session->flashdata('err'); ?>

    <section class="section">
        <div class="section-header">
            <h1>Divisi</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Divisi</h4>
                <div class="card-header-action">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-3">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($divisi as $a) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $a->nama_divisi; ?></td>
                                    <td class="text-center">
                                        <button type="button" id="btn-ubahDivisi" class="btn btn-success" data-toggle="modal" data-target="#ModalUbah" data-id="<?= $a->id_divisi; ?>" data-nama="<?= $a->nama_divisi; ?>">
                                            <i class="fas fa-edit"></i> Ubah
                                        </button>
                                        <a href="<?php echo base_url() . 'dashboard/hapus_divisi/' . $a->id_divisi; ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal Tambah -->
    <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Divisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url() . 'dashboard/tambah_divisi'; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-store"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>" placeholder="Nama Toko" name="nama" required>
                                <div class="invalid-feedback">
                                    <?= form_error('nama'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Ubah -->
    <div class="modal fade" id="ModalUbah" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Divisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url() . 'dashboard/update_divisi'; ?>">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-store"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>" placeholder="Nama Toko" name="nama" id="nama" required>
                                <div class="invalid-feedback">
                                    <?= form_error('nama'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer'); ?>

<!-- https://www.youtube.com/watch?v=13AXrKVIO14&list=PLGCWE8TQ6w3N2zuOTEWvebiRVuP7TJNur&index=7&ab_channel=SkuyNgoding -->