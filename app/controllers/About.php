<?php

class About extends Controller{
    public function index($nama = 'Riyani', $pekerjaan = 'Programmer', $umur = '30') {
        // echo "Hello, nama saya $nama dan saya adalah seorang $pekerjaan";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['tajuk'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['tajuk'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}