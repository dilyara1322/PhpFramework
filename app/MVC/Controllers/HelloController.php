<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/framework/Controller.php");

class HelloController extends Controller
{
    public function index()
    {
        return '<h1>Hello Controller</h1>';
    }
    public function data()
    {
        return '<h1>This is data</h1>';
    }
}