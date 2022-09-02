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
            <h1>Karyawan</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Karyawan</h4>
                <div class="card-header-action">
                    <a href="<?php echo base_url() . 'dashboard/tambah_karyawan' ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-4">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">
                                    No.
                                </th>
                                <th>Foto</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Lokasi</th>
                                <th>Divisi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($karyawan as $a) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $a->kode_karyawan; ?></td>
                                    <td><?php echo $a->nama_karyawan; ?></td>
                                    <td><?php echo $a->alamat_karyawan; ?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>

<?php $this->load->view('admin/template/footer'); ?>