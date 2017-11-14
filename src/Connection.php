<?php

class Connection{

  public static function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=minicms', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    return $db;
  }
}
