<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		if (!$this->ion_auth->logged_in())
		{
			redirect('login', 'refresh');
		}
	}

	public function render($view, $data = NULL)
	{
		$viewdata = empty($data) ? [] : $data;
		$viewdata['content'] = $view;
		$this->load->view('layout/layout', $viewdata);
	}
}
