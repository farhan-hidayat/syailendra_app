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
            <form action="<?php echo base_url('dashboard/tambah_karyawan') ?>" method="post">
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" placeholder="Masukan Nama Karyawan" required>
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
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. Hp</label>
                  <div class="col-sm-12 col-md-7">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" placeholder="08xxxx" numeric>
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
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>