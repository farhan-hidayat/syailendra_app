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
                <a href="<?php echo base_url() . 'dashboard/gaji'; ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Gaji <?= date('M - Y');  ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tambah Gaji Baru</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Gaji Karyawan</h4>
                        </div>
                        <form action="<?php echo base_url('dashboard/tambah_karyawan_aksi') ?>" method="post">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-4">
                                        <thead>
                                            <tr>
                                                <th width="1%">No.</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Divisi</th>
                                                <th>Gaji Pokok</th>
                                                <th>Tunjangan</th>
                                                <th colspan="2">Lembur</th>
                                                <th>Bonus</th>
                                                <th>Kedisiplinan</th>
                                                <th style="background-color: #42f445 !important">
                                                    Bersih
                                                </th>
                                                <th colspan="2">Tidak Masuk</th>
                                                <th colspan="2">Terlambat</th>
                                                <th>Kasbon</th>
                                                <th>Sisa Kasbon</th>
                                                <th>Terima</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
                                                    $no = 1;
                                                    foreach ($karyawan as $a) {
                                                    ?> -->
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href="<?php echo base_url() . 'dashboard/hapus_karyawan/' . $a->id_karyawan; ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <!-- <?php } ?> -->
                                            <tr>
                                                <td>
                                                    No
                                                </td>
                                                <td>
                                                    Kode
                                                    </br>
                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalTambah">
                                                        <!-- <i class="fas fa-plus"></i>  -->
                                                        Ubah
                                                    </button>
                                                </td>
                                                <td>Nama</td>
                                                <td>Divisi</td>
                                                <td>Gapok</td>
                                                <td>Tunjangan</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>Lembur</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td style="background-color: #42f445 !important">Bersih</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>Tdk Masuk</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>Terlambat</td>
                                                <td>Kasbon</td>
                                                <td>Sisa</td>
                                                <td>
                                                    <input type="text" name="gaji" value="1000000" class="form-control" disabled />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td style="background-color: #42f445 !important">b</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>b</td>
                                                <td>
                                                    <input type="text" name="gaji" class="form-control" />
                                                </td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                                <td>b</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-warning"><i class="fas fa-file"></i> Konsepkan</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Terbitkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>