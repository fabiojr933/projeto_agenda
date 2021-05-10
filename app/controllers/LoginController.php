<?php
namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller{
    public function index(){
        $dados["view"] = "Login";
        $this->load("Login", $dados);
    }
}