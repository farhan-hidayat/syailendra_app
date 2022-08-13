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
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-large-icons">
            <div class="card-icon bg-primary text-white">
            <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="card-body">
              <h4>Lokasi : <?php echo $jumlah_lokasi ?></h4>
              <?php foreach ($lokasi as $k) { ?>
                <p><?php echo $k->kode_lokasi; ?> : <?php echo $k->nama_lokasi; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-large-icons">
            <div class="card-icon bg-primary text-white">
              <i class="fas fa-users"></i>
            </div>
            <div class="card-body">
              <h4>Karyawan : <?php echo $jumlah_karyawan ?></h4>
              <?php foreach ($lokasi as $k) { ?>
                <?php 
                  $total = $this->db->query("SELECT lokasi.*, COUNT(id_karyawan) as jml FROM karyawan,lokasi WHERE lokasi_karyawan=id_lokasi AND id_lokasi=$k->id_lokasi");
                  $total_sekarang = $total->row()->jml;
                ?>
                <p><?php echo $k->kode_lokasi; ?> : <?php echo $total_sekarang; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      
<?php $this->load->view('admin/template/footer'); ?>