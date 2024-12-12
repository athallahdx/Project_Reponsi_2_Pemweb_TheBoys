<?php

class TheBoys extends Controller {
    public function index() {
        $this->view('The_Boys/index');
    }

    public function details() {
        $this->view('The_Boys/details');
    }

    public function register() {
        $this->view('The_Boys/register');
    }

    public function login() {
        $this->view('The_Boys/login');
    }

    public function community() {
        $this->view('The_Boys/community');
    }

    public function dashboard() {
        $this->view('The_Boys/dashboard');
    }

    public function teammembers() {
        $this->view('The_Boys/teammembers');
    }

    public function missions() {
        $this->view('The_Boys/missions');
    }

    public function userprofile() {
        $this->view('The_Boys/userprofile');
    }

    public function editprofile() {
        $this->view('The_Boys/editprofile');
    }

    public function userpost() {
        $this->view('The_Boys/userpost');
    }

    public function userpostdetails() {
        // $this->
    }

    public function memberdetail() {
        $this->view('The_Boys/memberdetail');
    }
}
