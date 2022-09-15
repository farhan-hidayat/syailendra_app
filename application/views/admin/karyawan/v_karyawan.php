<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Main Content -->
<div class="main-content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <section class="section">
        <div class="section-header">
            <h1>Karyawan</h1>
            <div class="section-header-button">
                <a href="<?php echo base_url() . 'dashboard/tambah_karyawan' ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Karyawan</h4>
                <div class="card-header-action">
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
                                <th>Kontak</th>
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
                                    <td><?php echo $a->foto_karyawan; ?></td>
                                    <td><?php echo $a->kode_karyawan; ?></td>
                                    <td><?php echo $a->nama_karyawan; ?></td>
                                    <td><?php echo $a->jk_karyawan; ?></td>
                                    <td><a href="https://wa.me/<?php echo $a->hp_karyawan; ?>" class="btn btn-success" target="_blank"><i class="ion-social-whatsapp-outline"></i></a></td>
                                    <td><?php echo $a->nama_lokasi; ?></td>
                                    <td><?php echo $a->nama_divisi; ?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url() . 'dashboard/hapus_karyawan/' . $a->id_karyawan; ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
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