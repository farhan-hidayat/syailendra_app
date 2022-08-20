<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lokasi</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Lokasi Toko</h4>
                <div class="card-header-action">
                    <a href="#" id="modal-5i" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                    <thead>                                 
                        <tr>
                        <th class="text-center">
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
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $a->kode_lokasi; ?></td>
                        <td><?php echo $a->nama_lokasi; ?></td>
                        <td><?php echo $a->alamat_lokasi; ?></td>
                        <td class="text-center">
                            <a href="<?php echo base_url() . 'dashboard/ubah_lokasi/'.$a->id_lokasi; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url() . 'dashboard/hapus_lokasi/'.$a->id_lokasi; ?>" class="btn btn-danger" id="swal-6i"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <form class="modal-part" id="modal-part" method="post" action="<?php echo base_url() . 'dashboard/tambah_lokasi'; ?>">
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
    </form>
    
</div>

<?php $this->load->view('admin/template/footer'); ?>