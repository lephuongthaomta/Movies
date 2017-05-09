<?php

class menu extends CWidget{
    public function init() {
       
    }
    public function run() {
        $data=Theloai::getAllTheLoai();
        $this->render("menu",array('data'=>$data));
    }
}