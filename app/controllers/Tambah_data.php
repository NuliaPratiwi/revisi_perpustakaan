<?php 



class Tambah_data extends Controller
{

    public function kategori(){
        $data['judul'] ="Tambah Kategori | Perpusken";
        $this->view('template/header',$data);
        $this->view('perpustakaan/tambahData/kategori');
        $this->view('template/footer');
    }
    

    public function jurusan(){
        $data['judul'] ="Tambah Jurusan | Perpusken";
        $this->view('template/header',$data);
        $this->view('perpustakaan/tambahData/jurusan');
        $this->view('template/footer');
    }
}
