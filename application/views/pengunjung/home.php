<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('pengunjung/template/header');
$this->load->view('pengunjung/template/navbar');
?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12" id="clock">
              <p class="date">{{ date }}</p>
              <br>
              <p class="time">{{ time }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('pengunjung/template/footer'); ?>