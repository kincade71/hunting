<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://intranet.forrent.com/index.php/welcome
	 *	- or -  
	 * 		http://intranet.forrent.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
	if($this->input->cookie('lights')){
			$lights = array(
					'lights'  => $this->input->cookie('lights'),
			);
			$this->session->set_userdata($lights);
		}
	}
	
	public function index()
	{
		$data['title'] = 'Hunt';
		$data['projectname'] = 'Hunt';
		$data['main_content'] = 'welcome_message';
		$data['where'] = $this->uri->segment(1);
		$data['whereiam'] = $this->uri->segment(1);
		if($this->session->userdata('enable_profiler') == 'TRUE'){
			$this->output->enable_profiler(TRUE);
		}
		$this->load->view('main/main_template',$data);
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '15360';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$data['main_content'] = "welcome_message";
			$this->load->view('main/main_template',$data.$error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data['main_content'] = "upload_success";
			$this->load->view('main/main_template',$data);
		}
	}
	
	public function lightsoff(){
		$lights = array(
				'lights'  => 'inverse',
		);
		
		$this->session->set_userdata($lights);
		$cookie = array(
				'name'   => 'lights',
				'value'  => 'inverse',
				'expire' => time()+60*60*24*30,
				'path'   => '/',
				'secure' => FALSE
		);
		
		$this->input->set_cookie($cookie);
		redirect(base_url());
	}
	
	public function lightson(){
		$lights = array(
				'lights'  => NULL,
		);
	
		$this->session->set_userdata($lights);
		$cookie = array(
				'name'   => 'lights',
				'value'  => NULL,
				'expire' => NULL,
				'path'   => '/',
				'secure' => FALSE
		);
		
		$this->input->set_cookie($cookie);
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */