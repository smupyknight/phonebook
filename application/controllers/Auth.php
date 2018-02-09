<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation $form_validation The form validation library
 */
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else if (!$this->ion_auth->is_admin()) {
			return show_error('You must be an administrator to view this page.');
		} else {
			redirect('/', 'refresh');
		}
	}

	public function login()
	{
		$this->data['title'] = $this->lang->line('login_heading');

		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() === TRUE) {
			$remember = (bool)$this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('/', 'refresh');
			} else {
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh');
			}
		} else {
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array(
				'id' => 'identity',
				'name' => 'identity',
				'type' => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array(
				'id' => 'password',
				'name' => 'password',
				'type' => 'password',
				'class' => 'form-control'
			);

			$this->_render_page('user/login', $this->data);
		}
	}

	public function logout()
	{
		$this->data['title'] = "Logout";

		$logout = $this->ion_auth->logout();

		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('login', 'refresh');
	}

	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{
		$this->viewdata = (empty($data)) ? $this->data : $data;
		$this->viewdata['content'] = $view;
		return $this->load->view('layout/auth', $this->viewdata);
	}
}
