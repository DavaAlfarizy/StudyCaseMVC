<?php

class Barang extends Controller 
{
    public function index()
    {
    $data['page'] = 'List Peminjaman';
    $data['barang'] = $this->model('BarangModel')->getAlldata();
    $this->view('templates/header', $data);
    $this->view('barang/index', $data);
    $this->view('templates/footer');
    }
    public function tambah()
    {
    $data['page'] = 'Tambah Data';
    $this->view('templates/header', $data);
    $this->view('barang/create');
    $this->view('templates/footer');
    }
    public function simpanbarang()
    {
    if( $this->model ('BarangModel')->tambahBarang ($_POST) > 0) { 
        header ('location:  ' .BASE_URL . '/barang/index ' );
        exit;
        }else{
    header('location: '. BASE_URL. '/barang/index');
    exit;
    }
    }
    public function edit($id)
    {
        $data['page'] = 'Edit barang';
        $data['barang'] = $this->model('barangModel')->getbarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/edit', $data);
        $this->view('templates/footer');
    }

    public function updatebarang()
    {
        if ($this->model('barangModel')->updatebarang($_POST) > 0) {
            header('Location: ' . BASE_URL . '/barang/index');
            exit;
        } else {
            header('Location: ' . BASE_URL . '/barang/index');
            exit;
}
}
    public function hapus ($id) 
    {
    if( $this->model('barangModel')->deletebarang ($id) > 0) { 
        header('location: ' .BASE_URL . '/barang/index');
    exit;
    }else{
        header('location: '. BASE_URL. '/barang/index');
    exit;
    }
}
public function cari()
{
    $data['page'] = 'Data Barang';
    $data['barang'] = $this->model('BarangModel')->cariBarang($_POST['search']);
    $this->view('templates/header', $data);
    $this->view('barang/index', $data);
    $this->view('templates/footer');
}
}
