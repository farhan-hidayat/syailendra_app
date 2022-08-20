<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');
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
		$data = array(
			'title' => "Tambah Lokasi"
		);
		$this->load->view('admin/lokasi/v_lokasi_tambah', $data);
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
		$this->form_validation->set_rules('nama', 'Nama', 'required');
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

		redirect(base_url() . 'dashboard/lokasi/v_lokasi');
	}
	
	public function karyawan()
	{
		$data = array(
			'title' => "Data Karyawan",
			'karyawan' => $this->m_data->get_data('karyawan')->result()
		);
		$this->load->view('admin/karyawan/v_karyawan', $data);
	}

	public function tambah_karyawan()
	{
		$data = array(
			'title' => "Tambah Karyawan",
			'karyawan' => $this->m_data->get_data('lokasi')->result()
		);
		$this->load->view('admin/karyawan/v_karyawan_tambah', $data);
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
		$this->load->view('admin/tabel', $data);
	}

    public function pengguna()
	{
		$data = array(
			'title' => "Pengguna"
		);
		$this->load->view('admin/akun', $data);
	}
}
