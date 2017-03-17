<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends Sipaten 
{
	public $data;

	public $now_date;

	public $start_date;

	public $end_date;

	public $category;

	public $user;

	public $status;

	public $query;

	public $per_page;

	public $page;

	public function __construct()
	{
		parent::__construct();

		$this->breadcrumbs->unshift(1, 'Surat Keluar', "surat_keluar");

		$this->load->model('msurat_keluar', 'surat_keluar');

		$this->now_date = date('Y-m-d');

		$this->start_date = $this->input->get('start');

		$this->end_date = $this->input->get('end');

		$this->category = $this->input->get('jenis');

		$this->user = $this->input->get('user');

		$this->status = $this->input->get('status');

		$this->query = $this->input->get('query');

		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');

		$this->page = $this->input->get('page');

		$this->load->js(base_url("public/app/surat_keluar.js"));
	}

	public function index()
	{
		$this->page_title->push('Surat Keluar', 'Data Surat Keluar');

		$this->breadcrumbs->unshift(2, 'Surat Keluar', "surat_keluar");

		$config = $this->template->pagination_list();

		$config['base_url'] = site_url("people?per_page={$this->per_page}&query={$this->query}");

		$config['per_page'] = $this->per_page;
		$config['total_rows'] = $this->surat_keluar->data(null, null, 'num');

		$this->pagination->initialize($config);

		$this->data = array(
			'title' => 'Data Surat Keluar', 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'data_surat' => $this->surat_keluar->data($this->per_page, $this->page),
			'num_surat' => $config['total_rows']
		);

		$this->template->view('surat-keluar/data-surat', $this->data);
	}
}

/* End of file Surat_keluar.php */
/* Location: ./application/controllers/Surat_keluar.php */