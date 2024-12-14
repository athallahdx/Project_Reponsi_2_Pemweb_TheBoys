<?php
    
    class Home extends Controller {
        public function index(){
            Session::destroy(); 
            $this->view('Home/index');
        }
    }