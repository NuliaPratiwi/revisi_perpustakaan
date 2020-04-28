<?php



class Tambah_data extends Controller
{

    public function kategori(){
        $data['judul'] ="Tambah Kategori | Perpusken";
        $data['buku'] = $this->model('Get_models')->ambilBuku();
		    $data['kategori'] = $this->model('Get_models')->ambilKategori();
        $this->view('template/header',$data);
        $this->view('perpustakaan/tambahData/kategori', $data);
        $this->view('template/footer');
    }


    public function jurusan(){
        $data['judul'] ="Tambah Jurusan | Perpusken";
        $this->view('template/header',$data);
        $this->view('perpustakaan/tambahData/jurusan');
        $this->view('template/footer');
    }
}
