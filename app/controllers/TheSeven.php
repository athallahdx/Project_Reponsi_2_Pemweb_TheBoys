<?php

class TheSeven extends Controller {
    public function index() {
        $this->view('The_Seven/index');
    }

    public function details() {
        $this->view('The_Seven/details');
    }

    public function register() {
        $this->view('The_Seven/register');
    }

    public function login() {
        $this->view('The_Seven/login');
    }

    public function community() {
        $this->view('The_Seven/community');
    }

    public function dashboard() {
        $this->view('The_Seven/dashboard');
    }

    public function teammembers() {
        $this->view('The_Seven/teammembers');
    }

    public function missions() {
        $this->view('The_Seven/missions');
    }

    public function userprofile() {
        $this->view('The_Seven/userprofile');
    }

    public function editprofile() {
        $this->view('The_Seven/editprofile');
    }

    public function userpost() {
        $this->view('The_Seven/userpost');
    }

    public function userpostdetails() {
        $this->view('The_Seven/userpostdetails');
    }

    public function memberdetail() {
        $this->view('The_Seven/memberdetail');
    }
}
