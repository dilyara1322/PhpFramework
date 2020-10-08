<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/framework/Controller.php");

class HelloController extends Controller
{
    public function index()
    {
        return $this->view("index.php", ['name'=>'Иванов']);
    }
    public function data()
    {
        return $this->view("data.php", ['name'=>'Иванов','group'=>'605-71']);
    }
}