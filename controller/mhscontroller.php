<?php
require_once "model/mahasiswa.php";

class mhscontroller {
    public function index() {
        $model= new mahasiswa();
        $data = $model->getdata();

        require "view/mhsview.php";
    }
}
