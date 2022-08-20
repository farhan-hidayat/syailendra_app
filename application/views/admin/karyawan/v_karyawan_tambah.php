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
              <a href="<?php echo base_url() . 'dashboard/karyawan'; ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Karyawan Baru</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Karyawan Baru</h2>
            <p class="section-lead">
              On this page you can create a new post and fill in all fields.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Karyawan</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Masukan Nama Karyawan">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Kerja</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                              </div>
                            </div>
                          <select class="form-control selectric">
                            <option>Tech</option>
                            <option>News</option>
                            <option>Political</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. Hp</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-phone"></i>
                            </div>
                          </div>
                          <input type="number" class="form-control" placeholder="08xxxx">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric">
                          <option>Publish</option>
                          <option>Draft</option>
                          <option>Pending</option>
                        </select>
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