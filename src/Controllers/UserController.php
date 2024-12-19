<?php

namespace Dsw\Tema6\Controllers;

class UserController extends Controller{

  public function index()  {
    $users = [
      ['id'=>'1','name'=>'Pepe', 'surname'=> 'Pepon'],
      ['id'=>'2','name'=>'Ana', 'surname'=> 'Anon'],
      ['id'=>'3','name'=>'Julia', 'surname'=> 'Julianon'],
      ['id'=>'4','name'=>'Roberto', 'surname'=> 'Roberton']

    ];
    // $users =[];
    echo $this->blade->view()->make('user.index', compact('users'))->render();
  }

  public function show($param) {
    $id = $param['id'];
    $user =[
      'id' => $id,
      'name' => 'Pepe',
      'surname' => 'Pepon'
    ];
    $data = [
      'user' => $user,
      'title' => 'Usuario'
    ];
    echo $this->blade->view()->make('user.show', $data)->render();
  }
}