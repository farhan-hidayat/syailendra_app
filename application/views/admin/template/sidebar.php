<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dashboard">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dashboard">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="<?php echo $this->uri->segment(2) == '' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Starter</li>
              <li class="<?php echo $this->uri->segment(2) == 'menusatu' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/menusatu"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
              <li class="<?php echo $this->uri->segment(2) == 'tabel' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/tabel"><i class="fas fa-th-large"></i> <span>Tabel</span></a></li>
              <li class="menu-header">Pengaturan</li>
              <li class="<?php echo $this->uri->segment(2) == 'akun' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/akun"><i class="far fa-user"></i> <span>Akun</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="#">Alert</a></li>
                  <li><a class="nav-link" href="#">Badge</a></li>
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