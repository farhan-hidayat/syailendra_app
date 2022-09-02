<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?php echo form_error('nama'); ?>
    <?php echo form_error('kode'); ?>

    <section class="section">
        <div class="section-header">
            <h1>Lokasi</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Lokasi Toko</h4>
                <div class="card-header-action">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">
                                    No.
                                </th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($lokasi as $a) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $a->kode_lokasi; ?></td>
                                    <td><?php echo $a->nama_lokasi; ?></td>
                                    <td><?php echo $a->alamat_lokasi; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url() . 'dashboard/ubah_lokasi/' . $a->id_lokasi; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url() . 'dashboard/hapus_lokasi/' . $a->id_lokasi; ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal Tambah-->
    <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Lokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url() . 'dashboard/tambah_lokasi'; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-store"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nama Toko" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kode</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Kode Toko" name="kode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Alamat Toko" name="alamat">
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
                <form method="post" action="<?php echo base_url() . 'dashboard/update_lokasi'; ?>">
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
                                <input type="text" class="form-control" placeholder="Nama Lokasi" name="nama" id="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kode</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Kode Toko" name="kode" id="kode" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Alamat Toko" name="alamat" id="alamat" required>
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