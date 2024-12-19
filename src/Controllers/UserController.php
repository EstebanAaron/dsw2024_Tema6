<?php

namespace Dsw\Tema6\Controllers;

class UserController extends Controller{

  public function index()  {
    echo $this->blade->view()->make('user.index')->render();
  }

  public function show($param) {
    $id = $param['id'];
    require __DIR__ . '/../views/user-detail.php';
  }
}