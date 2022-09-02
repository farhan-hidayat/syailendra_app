<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?php echo base_url() . 'dashboard/lokasi'; ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Ubah Lokasi</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">Ubah Data Lokasi</h2>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Lokasi</h4>
            </div>
            <?php foreach ($lokasi as $a) { ?>
              <form method="post" action="<?php echo base_url('dashboard/update_lokasi') ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="hidden" name="id" value="<?php echo $a->id_lokasi; ?>">
                      <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>" placeholder="Masukan Nama Toko" value="<?php echo $a->nama_lokasi; ?>" required>
                      <div class="invalid-feedback">
                        <?= form_error('nama'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="kode" class="form-control <?= form_error('kode') ? 'is-invalid' : null ?>" placeholder="Masukan Kode Nama Toko" value="<?php echo $a->kode_lokasi; ?>" required>
                      <div class="invalid-feedback">
                        <?= form_error('kode'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Toko" value="<?php echo $a->alamat_lokasi; ?>">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                  </div>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>