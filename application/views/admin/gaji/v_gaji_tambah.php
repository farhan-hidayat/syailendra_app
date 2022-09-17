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
                                                <th class="text-center" width="1%" rowspan="2">
                                                    No.
                                                </th>
                                                <th rowspan="2" style='text-align:center;'>Kode</th>
                                                <th rowspan="2" style='text-align:center;'>Nama</th>
                                                <th rowspan="2" style='text-align:center;'>Divisi</th>
                                                <th colspan="5" class="text-center">Pemasukan</th>
                                                <th rowspan="2" style='background-color:#42f445 !important'>Bersih</th>
                                                <th colspan="4" class="text-center">Pengeluaran</th>
                                                <th rowspan="2" style='text-align:center;'>Terima</th>
                                            </tr>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Lembur</th>
                                            <th>Bonus</th>
                                            <th>Kedisiplinan</th>
                                            <th>Tidak Masuk</th>
                                            <th>Terlambat</th>
                                            <th>Kasbon</th>
                                            <th>Sisa Kasbon</th>
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
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td>
                                                <input type="text" name="gaji" value="1000000" class="form-control currency" disabled>
                                            </td>
                                        </tbody>
                                        <tbody>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
                                            <td>b</td>
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