<?php 


class User extends Controller
{

    public function index(){
        $data['judul'] = "Daftar User | SMKN 1 DENPASAR";
        $this->view('template/header',$data);
        $this->view('perpustakaan/user/index',$data);
        $this->view('template/footer');
    }
    
}
