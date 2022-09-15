<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">
  <?= $this->session->flashdata('err'); ?>
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?php echo base_url() . 'dashboard/karyawan'; ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Tambah Karyawan Baru</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">Tambah Karyawan Baru</h2>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Karyawan</h4>
            </div>
            <form action="<?php echo base_url('dashboard/tambah_karyawan_aksi') ?>" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="foto" id="image-upload" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Karyawan" required>
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
                            <div class="input-group-text">
                              +62
                            </div>
                          </div>
                          <input type="number" class="form-control <?= form_error('hp') ? 'is-invalid' : null ?>" name="hp" placeholder="8xxxx" required>
                          <div class="invalid-feedback">
                            <?= form_error('hp'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Kerja</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-map-marker-alt"></i>
                            </div>
                          </div>
                          <select class="form-control selectric" name="lokasi" required>
                            <option value="">- Pilih Lokasi -</option>
                            <?php foreach ($lokasi as $l) { ?>
                              <option <?php if (set_value('lokasi') == $l->id_lokasi) {
                                        echo "selected='selected'";
                                      } ?> value="<?php echo $l->id_lokasi ?>"><?php echo $l->nama_lokasi; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Divisi</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="divisi" required>
                          <option value="">- Pilih Divisi -</option>
                          <?php foreach ($divisi as $d) { ?>
                            <option <?php if (set_value('divisi') == $d->id_divisi) {
                                      echo "selected='selected'";
                                    } ?> value="<?php echo $d->id_divisi ?>"><?php echo $d->nama_divisi; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="jK" required>
                          <option value="">- Pilih Jenis Kelamin -</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar-alt"></i>
                            </div>
                          </div>
                          <input type="text" name="tgl_lahir" class="form-control datepicker">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Bergabung</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar-alt"></i>
                            </div>
                          </div>
                          <input type="text" name="tgl_gabung" class="form-control datepicker">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gaji</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              Rp.
                            </div>
                          </div>
                          <input type="text" name="gaji" class="form-control currency">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>