<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data(){

		$query = $this->db->get('users');
		return $query->result();
	}

	public function insert_entry()
	{
		$data_user = [
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'status' => $this->input->post('status'),
					'created_at' => date("y-m-d H:i:s", strtotime('now')),
					'updated_at' => date("y-m-d H:i:s", strtotime('now'))
				];

		$this->db->insert('users', $data_user);


		if(!empty($this->input->post('alamat'))){
   			$id_user = $this->db->insert_id();
            foreach ($this->input->post('alamat') as $key => $value) {
            	$data_address = [
							'user_id' => $id_user,
							'detail' => $value['detail'],
							'preferred' => (isset($value['preferred']) == null ? 0 : 1),
							'created_at' => date("y-m-d H:i:s", strtotime('now')),
							'updated_at' => date("y-m-d H:i:s", strtotime('now'))
						];
                $this->db->insert('addresses',$data_address);
            }               
        }
	}

	public function address_entry()
	{
		if(!empty($this->input->post('alamat'))){
            foreach ($this->input->post('alamat') as $key => $value) {
            	$data_address = [
							'user_id' => $value['user_id'],
							'detail' => $value['detail'],
							'preferred' => (isset($value['preferred']) == null ? 0 : 1),
							'created_at' => date("y-m-d H:i:s", strtotime('now')),
							'updated_at' => date("y-m-d H:i:s", strtotime('now'))
						];
                $this->db->insert('addresses',$data_address);
            }               
        }
	}

	public function edit_user($id)
	{
		$query = $this->db->get_where('users', ['id' => $id]);
		return $query->row();
	}

	public function update_user($id)
	{
		$kondisi = ['id' => $this->input->post('id')];
		
		$data = [
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'status' => $this->input->post('status'),
					'created_at' => date("y-m-d H:i:s", strtotime('now')),
					'updated_at' => date("y-m-d H:i:s", strtotime('now'))
				];

		$this->db->update('users', $data, $kondisi);

		$this->hapus_address($id);

		if(!empty($this->input->post('alamat'))){
            foreach ($this->input->post('alamat') as $key => $value) {
            	$data_address = [
							'user_id' => $id,
							'detail' => $value['detail'],
							'preferred' => (isset($value['preferred']) == null ? 0 : 1),
							'created_at' => date("y-m-d H:i:s", strtotime('now')),
							'updated_at' => date("y-m-d H:i:s", strtotime('now'))
						];
                $this->db->insert('addresses',$data_address);
            }               
        }
	}

	public function hapus_user($id)
	{
		$this->db->delete('users', ['id' => $id]);
		$this->db->delete('addresses', ['user_id' => $id]);
	}

	public function hapus_address($id)
	{
		$this->db->delete('addresses', ['user_id' => $id]);
	}

	public function hapus_address_row($id)
	{
		$this->db->delete('addresses', ['id' => $id]);
	}

	public function detail_user($id)
	{
		$query = $this->db->get_where('users', ['users.id' => $id]);
		return $query->row();
	}

	public function detail_alamat($id)
	{
		$query = $this->db->get_where('addresses', ['addresses.user_id' => $id]);
		return $query->result();
	}
}

?>