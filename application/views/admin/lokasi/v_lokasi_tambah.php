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
            <div class="section-header-back">
              <a href="<?php echo base_url() . 'dashboard/lokasi'; ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Lokasi Baru</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Lokasi Baru</h2>
            <p class="section-lead">
              On this page you can create a new post and fill in all fields.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Lokasi</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Toko">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Nama Toko">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Toko">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Tambah</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>