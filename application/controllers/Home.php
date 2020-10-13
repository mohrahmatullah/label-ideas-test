<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}

	public function lihatdata()
	{
		$data['database'] = $this->user_model->get_all_data();

		$data['title'] = "Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function formtambah()
	{
		$data['title'] = "Tambah Data | Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('formtambah');
		$this->load->view('templates/footer');
	}

	public function tambahuser()
	{
		$this->form_validation->set_message('is_unique', '{field} sudah terpakai');

		$this->form_validation->set_rules('username', 'Username', ['required', 'is_unique[users.username]']);

		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formtambah();
		}
		else
		{
			$this->user_model->insert_entry();
			$this->session->set_flashdata('input_sukses','Data user berhasil di input');
			redirect(current_url());
		}
	}

	public function tambahalamat($id)
	{
		$this->user_model->address_entry();
		$this->session->set_flashdata('input_sukses','Data user berhasil di input');
		redirect('home/formedit/'.$id);
	}

	public function hapusdata($id)
	{
		$this->user_model->hapus_user($id);
		$this->session->set_flashdata('hapus_sukses','Data user berhasil di hapus');
		redirect('/home/lihatdata');
	}

	public function hapusdataalamat($id, $id_ut)
	{
		$this->user_model->hapus_address_row($id);
		$this->session->set_flashdata('hapus_sukses','Data alamat berhasil di hapus');
		redirect('home/formedit/'.$id_ut);
	}

	public function formedit($id)
	{
		$data['title'] = 'Edit Data | Test tampil Database';

		$data['db'] = $this->user_model->edit_user($id);
		$data['db_alamat'] = $this->user_model->detail_alamat($id);
		$this->load->view('templates/header', $data);
		$this->load->view('formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updateuser($id)
	{
		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formedit($id);
		}
		else
		{
			$this->user_model->update_user($id);
			$this->session->set_flashdata('update_sukses', 'Data user berhasil diperbaharui');
			redirect('/');
		}
	}

	public function validasi()
	{
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');

		$config = [[
					'field' => 'email',
					'label' => 'email',
					'rules' => 'required'
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required'
				],
				[
					'field' => 'status',
					'label' => 'status',
					'rules' => 'required'
				]];

		$this->form_validation->set_rules($config);
	}

	public function detaildata($id)
	{
		$data['title'] = 'Lihat Data | Test tampil Database';

		$data['db'] = $this->user_model->detail_user($id);
		$data['db_alamat'] = $this->user_model->detail_alamat($id);

		$this->load->view('templates/header', $data);
		$this->load->view('detaildata', $data);
		$this->load->view('templates/footer');
	}
}
?>