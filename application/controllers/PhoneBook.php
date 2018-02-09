<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhoneBook extends BaseController
{
	private $data = [
		'name' => [
			'id' => 'name',
			'name' => 'name',
			'class' => 'form-control'
		],
		'phone_number' => [
			'id' => 'phone_number',
			'name' => 'phone_number',
			'class' => 'form-control'
		],
		'date_of_adding' => [
			'id' => 'date_of_adding',
			'name' => 'date_of_adding',
			'class' => 'form-control'
		],
		'additional_notes' => [
			'id' => 'additional_notes',
			'name' => 'additional_notes',
			'class' => 'form-control'
		],
		'message' => '',
		'type' => 'create'
	];

	private $method;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('phonebook_model');

		$this->method = $this->input->method();
	}

	public function index()
	{
		$data = [
			'list' => $this->phonebook_model->list()
		];
		$this->render('phonebook/index', $data);
	}

	public function create()
	{
		if ($this->method == 'get') {
			$this->data['id'] = '';
			$this->data['type'] = 'create';

			$this->render('phonebook/form', $this->data);
		} else if ($this->method == 'post') {
			$this->phonebook_model->create($this->input->post());
			redirect('/');
		}
	}

	public function update($id)
	{
		if ($this->method == 'get') {
			$data = $this->phonebook_model->get($id);

			if (count($data)) {
				$data = $data[0];

				$this->data['id'] = $id;
				$this->data['type'] = 'update';
				$this->data['name']['value'] = $data->name;
				$this->data['phone_number']['value'] = $data->phone_number;
				$this->data['date_of_adding']['value'] = $data->date_of_adding;
				$this->data['additional_notes']['value'] = $data->additional_notes;

				$this->render('phonebook/form', $this->data);
			} else {
				redirect('/');
			}
		} else if ($this->method == 'post') {
			$this->phonebook_model->update($id, $this->input->post());
			redirect('/');
		}
	}

	public function delete($id)
	{
		$this->phonebook_model->delete($id);
		redirect('/');
	}
}
