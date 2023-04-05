<?php

namespace Controller;
use Core\Controller;

class ViewController extends Controller
{
    public function index()
    {
        $this->view('Sites\index');
        $this->view->render();
    }
    public function listing()
    {
        $this->view('Sites\listing');
        $this->view->render();
    }
    public function upload()
    {
        $this->view('Sites\upload');
        $this->view->render();
    }
    public function search()
    {
        $this->view('Sites\search');
        $this->view->render();
    }
}