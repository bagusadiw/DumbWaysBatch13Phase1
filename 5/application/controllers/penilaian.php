<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
	public function index(){
		$this->load->view('input');
	}

	public function hitung(){
		$nama 			= $this->input->post("nama");
		$nim			= $this->input->post("nim");
		$presensi       = $this->input->post("presensi");
		$totalpresensi  = 14;
		$tugas          = $this->input->post("tugas");
		$uts            = $this->input->post("uts");
		$uas            = $this->input->post("uas");

		$nilaipresensi  = $presensi / $totalpresensi * 10;
		$nilaitugas     = $tugas / 100 * 20;
		$nilaiuts       = $uts / 100 * 30;
		$nilaiuas       = $uas / 100 * 40;

		$nilaitotal     = $nilaipresensi + $nilaitugas + $nilaiuts + $nilaiuas;
		if ($nilaitugas == 0 || $nilaiuts == 0 || $nilaiuas == 0 || $nilaitotal < 50){
			$nilai = "E";
		}else if (50 <= $nilaitotal && $nilaitotal <= 60){
			$nilai = "D";
		}else if (61 <= $nilaitotal && $nilaitotal <= 70){
			$nilai = "C";
		}else if (71 <= $nilaitotal && $nilaitotal <= 79){
			$nilai = "B";
		}else if ($nilaitotal >= 80){
			$nilai = "A";
		}else{
			$nilai = "undefine";
		}

		$data['nama'] = $nama;
		$data['nim'] = $nim;
		$data['nilai'] = $nilai;

		$this->load->view('output',$data);
	}
}
