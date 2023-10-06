<?php 
class Home extends Controller { 
    public function index()
    {
    $data['page'] = 'Home';
    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer');
    }
    // public function page()
    // {
    // $data['page'] = 'Page   ';
    // $data['gambar'] = 'gojo.jpeg';
    // $data['nama'] = 'Satorou';
    // $data['pekerjaan'] = 'S++'; ($data);
    // $this->view('templates/header');
    // $this->view('home/page', $data);
    // $this->view('templates/footer');
    // } 
}
?>