<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		belumlogin();
	}
	public function index()
	{
		$data['Pengguna'] = $this->db->get_where('pengguna', ['Id_User' =>
		$this->session->userdata('Id_User')])->row_array();

		
		
		
		
		
		
// Nampilin Grafik
		// $pengunjung =  $this->db->query("SELECT COUNT(id_pengunjung) as count,MONTHNAME(tanggal) as month_name FROM pengunjung WHERE YEAR(tanggal) = '" . date('Y') . "' GROUP BY YEAR(tanggal), MONTH(tanggal)")->result_array();

		// foreach ($pengunjung as $p) {
		// 	$data['tanggal'][] = $p['month_name'];
		// 	$data['jumlah'][] = (int)$p['count'];
		// }
		// $data['grafik'] = json_encode($data);

		$this->load->view('dashboard');
	}
}
