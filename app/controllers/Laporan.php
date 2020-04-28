<?php 


class Laporan extends Controller
{

    public function index(){
        $data['judul'] = "Daftar Buku | SMKN 1 DENPASAR";
        $this->view('template/header',$data['judul'] = "laporan buku");
        $this->view('perpustakaan/laporan/index',$data);
        $this->view('template/footer');
    }
    

    public function L_buku(){
    	$data['judul'] = "laporan buku";
    	$this->view('template/header',$data);
    	$this->view('perpustakaan/laporan/L_buku', $data);
	    $this->view('template/footer');
    }

    public function L_user(){
    	$data['judul'] = "laporan buku";
    	$this->view('template/header',$data);
    	$this->view('perpustakaan/laporan/L_user', $data);
	    $this->view('template/footer');
    }
}
