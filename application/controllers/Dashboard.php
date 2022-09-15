<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('m_data');
		check_not_login();
	}

	public function index()
	{
		$data = array(
			'title' => "Dashboard",
			'jumlah_lokasi' => $this->m_data->get_data('lokasi')->num_rows(),
			'lokasi' => $this->m_data->get_data('lokasi')->result(),
			'jumlah_karyawan' => $this->m_data->get_data('karyawan')->num_rows(),
			'karyawan' => $this->m_data->get_data('karyawan')->result()
		);
		$this->load->view('admin/v_dashboard', $data);
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}

	public function lokasi()
	{
		$data = array(
			'title' => "Data Lokasi",
			'lokasi' => $this->m_data->get_data('lokasi')->result()
		);
		$this->load->view('admin/lokasi/v_lokasi', $data);
	}

	public function tambah_lokasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[lokasi.nama_lokasi]');
		$this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[lokasi.nama_lokasi]');

		if ($this->form_validation->run() != false) {

			$nama = $this->input->post('nama');
			$kode = $this->input->post('kode');
			$alamat = $this->input->post('alamat');

			$data = array(
				'nama_lokasi' => $nama,
				'kode_lokasi' => $kode,
				'alamat_lokasi' => $alamat
			);

			$this->m_data->insert_data($data, 'lokasi');

			$this->session->set_flashdata('msg', 'Ditambah');

			redirect(base_url() . 'dashboard/lokasi');
		} else {
			$this->session->set_flashdata(
				'err',
				'
									<div class="alert alert-danger alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Sukses!</strong> Gagal Tambah Data.
									</div>'
			);
			redirect(base_url() . 'dashboard/lokasi');
		}
	}

	public function ubah_lokasi($id)
	{
		$where = array(
			'id_lokasi' => $id
		);
		$data = array(
			'title' => "Tambah Lokasi",
			'lokasi' => $this->m_data->edit_data($where, 'lokasi')->result()
		);
		$this->load->view('admin/lokasi/v_lokasi_ubah', $data);
	}

	public function update_lokasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[lokasi.nama_lokasi]');
		$this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[lokasi.kode_lokasi]');

		if ($this->form_validation->run() != false) {

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$kode = $this->input->post('kode');
			$alamat = $this->input->post('alamat');

			$where = array(
				'id_lokasi' => $id
			);

			$data = array(
				'nama_lokasi' => $nama,
				'kode_lokasi' => $kode,
				'alamat_lokasi' => $alamat
			);

			$this->m_data->update_data($where, $data, 'lokasi');

			$this->session->set_flashdata('msg', 'Diubah');

			redirect(base_url() . 'dashboard/lokasi');
		} else {

			$id = $this->input->post('id');
			$where = array(
				'id_lokasi' => $id
			);
			$data['lokasi'] = $this->m_data->edit_data($where, 'lokasi')->result();
			$this->load->view('admin/lokasi/v_lokasi_ubah', $data);
		}
	}

	public function hapus_lokasi($id)
	{
		$where = array(
			'id_lokasi' => $id
		);

		$this->m_data->delete_data($where, 'lokasi');

		$this->session->set_flashdata('msg', 'Dihapus');

		redirect(base_url() . 'dashboard/lokasi/v_lokasi');
	}

	public function divisi()
	{
		$data = array(
			'title' => "Data Divisi",
			'divisi' => $this->m_data->get_data('divisi')->result()
		);
		$this->load->view('admin/divisi/v_divisi', $data);
	}

	public function tambah_divisi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[divisi.nama_divisi]');

		if ($this->form_validation->run() != false) {

			$nama = $this->input->post('nama');

			$data = array(
				'nama_divisi' => $nama,
			);

			$this->m_data->insert_data($data, 'divisi');

			$this->session->set_flashdata('msg', 'Ditambah');

			redirect(base_url() . 'dashboard/divisi');
		} else {
			$msg = '<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;&nbsp; &nbsp;</span>
							</button>
							<strong> ' . form_error('nama') . '</strong>
					</div>';

			$this->session->set_flashdata('err', $msg);
			redirect(base_url() . 'dashboard/divisi');
		}
	}

	public function ubah_divisi($id)
	{
		$where = array(
			'id_divisi' => $id
		);
		$data = array(
			'title' => "Ubah Divisi",
			'divisi' => $this->m_data->edit_data($where, 'divisi')->result()
		);
		$this->load->view('admin/divisi/v_divisi_ubah', $data);
	}

	public function update_divisi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[divisi.nama_divisi]');

		if ($this->form_validation->run() != false) {

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$where = array(
				'id_divisi' => $id
			);

			$data = array(
				'nama_divisi' => $nama,
			);

			$this->m_data->update_data($where, $data, 'divisi');

			$this->session->set_flashdata('msg', 'Diubah');

			redirect(base_url() . 'dashboard/divisi');
		} else {

			$msg = '<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;&nbsp; &nbsp;</span>
							</button>
							<strong> ' . form_error('nama') . '</strong>
					</div>';

			$this->session->set_flashdata('err', $msg);
			redirect(base_url() . 'dashboard/divisi');
		}
	}

	public function hapus_divisi($id)
	{
		$where = array(
			'id_divisi' => $id
		);

		$this->m_data->delete_data($where, 'divisi');

		redirect(base_url() . 'dashboard/divisi/v_divisi');
	}

	public function karyawan()
	{
		$data = array(
			'title' => "Data Karyawan",
			'lokasi' => $this->m_data->get_data('lokasi')->result(),
			'karyawan' => $this->db->query("SELECT * FROM karyawan,lokasi,divisi WHERE lokasi_karyawan=id_lokasi AND divisi_karyawan=id_divisi order by id_karyawan desc")->result()
		);
		$this->load->view('admin/karyawan/v_karyawan', $data);
	}

	public function tambah_karyawan()
	{
		$data = array(
			'title' => "Tambah Karyawan",
			'lokasi' => $this->m_data->get_data('lokasi')->result(),
			'divisi' => $this->m_data->get_data('divisi')->result()
		);
		$this->load->view('admin/karyawan/v_karyawan_tambah', $data);
	}
	public function tambah_karyawan_aksi()
	{
		$this->form_validation->set_rules('hp', 'No Hp', 'required|is_unique[karyawan.hp_karyawan]');

		if ($this->form_validation->run() != false) {

			$hp = $this->input->post('hp');
			$nama = $this->input->post('nama');
			$lokasi = $this->input->post('lokasi');
			$divisi = $this->input->post('divisi');
			$jK = $this->input->post('jK');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$tgl_gabung = $this->input->post('tgl_gabung');
			$gajii = $this->input->post('gaji');
			$gaji = str_replace(',', '', $gajii);
			$toko = $this->db->query("SELECT * FROM lokasi WHERE id_lokasi=$lokasi")->row()->kode_lokasi;
			$this->db->order_by('id_karyawan', 'DESC');
			$sql 		= $this->db->get('karyawan');
			if ($sql->num_rows() == 0) {
				$kode   = $toko . "001";
			} else {
				$noUrut 	 	= substr($sql->row()->kode_karyawan, 4, 3);
				$noUrut++;
				$kode	  = $toko . sprintf("%03s", $noUrut);
			}

			$data = array(
				'kode_karyawan' => $kode,
				'nama_karyawan' => $nama,
				'hp_karyawan' => "62" . $hp,
				'lokasi_karyawan' => $lokasi,
				'divisi_karyawan' => $divisi,
				'jK_karyawan' => $jK,
				'tgllahir_karyawan' => $tgl_lahir,
				'tglmsuk_karyawan' => $tgl_gabung,
				'gaji_karyawan' => $gaji,
			);

			$this->m_data->insert_data($data, 'karyawan');

			$this->session->set_flashdata('msg', 'Ditambah');

			redirect(base_url() . 'dashboard/karyawan');
		} else {
			$msg = '<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;&nbsp; &nbsp;</span>
							</button>
							<strong> ' . form_error('hp') . '</strong>
					</div>';

			$this->session->set_flashdata('err', $msg);
			redirect(base_url() . 'dashboard/tambah_karyawan');
		}
	}

	public function hapus_karyawan($id)
	{
		$where = array(
			'id_karyawan' => $id
		);

		$this->m_data->delete_data($where, 'karyawan');

		$this->session->set_flashdata('msg', 'Dihapus');

		redirect(base_url() . 'dashboard/karyawan/v_karyawan');
	}

	public function histori()
	{
		$data = array(
			'title' => "Histori"
		);
		$this->load->view('admin/tabel', $data);
	}

	public function rekap()
	{
		$data = array(
			'title' => "Rekap"
		);
		$this->load->view('admin/tabel', $data);
	}

	public function kasbon()
	{
		$data = array(
			'title' => "Kasbon"
		);
		$this->load->view('admin/tabel', $data);
	}

	public function gaji()
	{
		$data = array(
			'title' => "Gaji"
		);
		$this->load->view('admin/gaji/v_gaji', $data);
	}

	public function tambah_gaji()
	{
		$data = array(
			'title' => "Gaji"
		);
		$this->load->view('admin/gaji/v_gaji_tambah', $data);
	}

	public function pengguna()
	{
		$data = array(
			'title' => "Pengguna"
		);
		$this->load->view('admin/akun', $data);
	}
}
