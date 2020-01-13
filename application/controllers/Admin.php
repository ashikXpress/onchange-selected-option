<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{

		$data['countries']=$this->db->get('country')->result();

		return $this->load->view('admin/create',$data);

	}
	public function state(){
		$id=$this->input->post('country_id');
		if ($id){
			$states=$this->db->where('country_id',$id)->get('state')->result();
			echo '<option selected disabled>Select State</option>';
			foreach ($states as $state){
				echo '<option value="'.$state->id.'">'.$state->name.'</option>';
			}
		}



	}

}
