<?php

namespace Dsw\Tema6\Controllers;

use Dsw\Tema6\Models\User;

class UserController extends Controller{

  public function index()  {
    $users = User::all();
    // $users =[];
    echo $this->blade->view()->make('user.index', compact('users'))->render();
  }

  public function show($param) {
    $id = $param['id'];
    $user = User::get($id);
    $data = [
      'user' => $user,
      'title' => 'Usuario: '.$id
    ];
    echo $this->blade->view()->make('user.show', $data)->render();
  }
}