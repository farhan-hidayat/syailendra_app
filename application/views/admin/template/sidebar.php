<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>dashboard">Syailendra</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>dashboard">Sy</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="<?php echo $this->uri->segment(2) == '' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Starter</li>
      <li class="<?php echo $this->uri->segment(2) == 'lokasi' || $this->uri->segment(2) == 'divisi' || $this->uri->segment(2) == 'karyawan' ? 'active' : ''; ?> nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i> <span>Master Data</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'lokasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/lokasi">Data Lokasi</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'divisi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/divisi">Data Divisi</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'karyawan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/karyawan">Data Karyawan</a></li>
        </ul>
      </li>
      <li class="<?php echo $this->uri->segment(2) == 'presensi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/presensi"><i class="fas fa-barcode"></i> <span>Presensi</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'histori' || $this->uri->segment(2) == 'rekap' ? 'active' : ''; ?> nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i> <span>Data Presensi</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'histori' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/histori">Histori</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'rekap' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/rekap">Rekap</a></li>
        </ul>
      </li>
      <li class="<?php echo $this->uri->segment(2) == 'kasbon' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/kasbon"><i class="fas fa-book"></i> <span>Kasbon</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'gaji' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/gaji"><i class="fas fa-wallet"></i> <span>Gaji</span></a></li>
      <li class="menu-header">Pengaturan</li>
      <li class="<?php echo $this->uri->segment(2) == 'pengguna' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/pengguna"><i class="fas fa-users"></i> <span>Pengguna</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'hitungan' || $this->uri->segment(2) == 'rekap' ? 'active' : ''; ?> nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-clock"></i> <span>Formula</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'hitungan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/histori">Terlambat & Lembur</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'rekap' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/rekap">Lorem</a></li>
        </ul>
      </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
      </a>
    </div>
  </aside>
</div>