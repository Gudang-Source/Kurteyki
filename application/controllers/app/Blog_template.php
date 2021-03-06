<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_template extends My_App{

	public $index = 'app/blog_template/index';
	public $form = 'app/blog_template/form';	
	public $redirect = 'app/blog_template';

	public function __construct(){
		parent::__construct();

		$this->load->model('app/M_Blog_Template');         
	}   

	public function index()
	{

		$data = array(
			'title' => 'Blog Template', 
			'templates' => $this->M_Blog_Template->read_template(),         
		);        

		$this->load->view($this->index, $data);
	}

	public function update($id){
		$data = array(
			'title' => 'Update Blog Template Code', 
			'codemirror' => true,
			'allfile' => $this->M_Blog_Template->read_template_update($id),         
		);        

		$this->load->view($this->form, $data);
	}

	public function get_template_file(){
		$file = $this->input->post('filename');

		echo file_get_contents($file);
	}

	public function process_update(){

		$post = $this->input->post();

		if (empty($post['filename']) || empty($post['code'])) {

			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'warning',
				'message_text' => 'Required Code and Filename !',
			]);

			redirect($post['redirect']);
		}

		if (file_put_contents($post['filename'], $post['code'])) {
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'info',
				'message_text' => $this->lang->line('success_update'),
			]);
		}else {
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'warning',
				'message_text' => $this->lang->line('failed_update'),
			]);
		}

		redirect($post['redirect'].'?filename='.$post['filename']);
	}

	public function process_template()
	{

		$process = $this->M_Blog_Template->process_template();

		if ($process) {
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'info',
				'message_text' => $this->lang->line('success_update'),
			]);
		}else{
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'warning',
				'message_text' => $this->lang->line('failed_update'),
			]);
		}

		redirect(base_url($this->redirect));

	}	

	public function process_style($type){

		$process = $this->M_Blog_Template->process_style($type);

		if ($process) {
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'info',
				'message_text' => $this->lang->line('success_update'),
			]);
		}else{
			$this->session->set_flashdata([
				'message' => true,
				'message_type' => 'warning',
				'message_text' => $this->lang->line('failed_update'),
			]);
		}

		redirect(base_url($this->redirect));

	}


}
