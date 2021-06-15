<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mymodels');

        if($this->session->userdata('status') != "login"){
            redirect(base_url());
        }

	}

	public function index(){	
		$this->load->view('Beranda');
	}

	public function baca_form(){
		$this->load->view('form_tambah');
	}

	public function tanya_kami(){
		$dataInputan = array(
			'user' => $this->input->post('user'),
			'email' => $this->input->post('email'),
			'question' => $this->input->post('question')
		);
		$this->mymodels->enter('qna', $dataInputan);
		redirect(base_url(). "index.php/hal_admin/");
	}

	public function hapus_data($penunjuk){
		$dataPenunjuk = array(
			'no' => $penunjuk
		);
		$this->mymodels->eraser('mhs', $dataPenunjuk);
		redirect(base_url()."index.php/hal_admin/");
	}

	public function recruit(){
		$dataInputan = array(
			'name' => $this->input->post('name'),
			'user' => $this->input->post('user'),
			'email' => $this->input->post('email'),
			'reason' => $this->input->post('reason')
		);
		$this->mymodels->enter('recruit', $dataInputan);
		redirect(base_url(). "index.php/hal_admin/");
	}

	public function subs(){
		$dataInputan = array(
			'email' => $this->input->post('email')
		);
		$this->mymodels->enter('subs', $dataInputan);
		redirect(base_url(). "index.php/hal_admin/");
	}

    public function takeData($penunjuk){
        $dataPenunjuk = array(
            'no' => $penunjuk
        );

		$dataMhs = $this->mymodels->specials("mhs", $dataPenunjuk);
		$data = array(
			"yourData" => $dataMhs,
		);
		$this->load->view('form_edit', $data);
    }

	public function update_data(){
		$dataInputan = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'alamat' => $this->input->post('alamat')
		);
		$dataPenunjuk = array(
			'no' => $this->input->post('no'),
		);
		$dataMhs = $this->mymodels->updater("mhs", $dataInputan, $dataPenunjuk);
		redirect(base_url(). "index.php/hal_admin/");
	}
}