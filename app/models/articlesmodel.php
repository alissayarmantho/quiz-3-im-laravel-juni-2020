<?php

namespace app\models;
use Illuminate\Support\Facades\DB;

class ArticlesModel{
  public static function get_all(){
    $items = DB::table('articles')->get();
    return $items;
  }
  public static function save($data){
    //$data is an associative array with key value pairs according to the table column names
    $new_item = DB::table('articles') -> insert ($data);
    return $new_item;
  }
}
 ?>
