<?php

namespace Dsw\Tema6\Models;

class User{
  static private $users =[
  ['id'=>'1','name'=>'Pepe', 'surname'=> 'Pepon'],
  ['id'=>'2','name'=>'Ana', 'surname'=> 'Anon'],
  ['id'=>'3','name'=>'Julia', 'surname'=> 'Julianon'],
  ['id'=>'4','name'=>'Roberto', 'surname'=> 'Roberton']];

  public static function all(){
    return self::$users;
  }

  public static function get($id){
    return array_first(self::$users, function($user) use($id){
      return $user['id']==$id;
    });
  }
}