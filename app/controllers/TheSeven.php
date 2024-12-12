<?php

class TheSeven extends Controller {
    public function index() {
        $this->view('The_Seven/index');
    }

    public function register(){
        $this->view('The_Seven/register');
    }

    public function community(){
        $this->view('The_Seven/community');
    }

    public function dashboard(){
        $this->view('The_Seven/dashboard');
    }

    public function teammember(){
        $this->view('The_Seven/Dashboard/teammember');
    }

    public function login(){
        $this->view('The_Seven/login');
    }

    public function logout(){
        $this->view('The_Seven/logout');
    }
}