<?php

class TheBoys extends Controller {
    public function index() {
        $this->view('The_Boys/index');
    }

    public function register() {
        $this->view('The_Boys/register');
    }
}
