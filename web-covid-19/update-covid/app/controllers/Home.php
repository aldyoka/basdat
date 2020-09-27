<?php

class Home extends Controller
{
    public function index()
    {
        $data['ks'] = $this->model('Sebaran_model')->getJumlahKasus();

        if (isset($_POST['submit'])) {
            $data['mhs'] = $this->model('Sebaran_model')->getDataDicari($_POST);
        } elseif (isset($_POST['submit1'])) {
            $data['mhs'] = $this->model('Sebaran_model')->getDataDicari2($_POST);
        } else {
            $data['mhs'] = $this->model('Sebaran_model')->getAllData();
        }
        $this->view('home/index', $data);
    }
}
