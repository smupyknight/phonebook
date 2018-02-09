<?php

class PhoneBook_model extends CI_Model {

	public $name;
	public $phone_number;
	public $date_of_adding;
	public $additional_notes;

	public function list() 
	{
		return $this->db->get('phone_book')->result();
	}

	public function get($id)
	{
		return $this->db->get_where('phone_book', ['id' => $id])->result();
	}

	public function create($data)
	{
		$this->db->insert('phone_book', $data);
	}

	public function update($id, $data)
	{
		$this->db->update('phone_book', $data, ['id' => $id]);
	}

	public function delete($id) {
		$this->db->delete('phone_book', ['id' => $id]);
	}
}