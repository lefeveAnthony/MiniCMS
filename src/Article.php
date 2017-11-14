<?php

class Article{

private $id, $name, $content, $date, $author;

  public function __construct(Array $data){
    $this->hydrate($data);
  }

  public function hydrate(Array $data){
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function getId(){ return $this->id; }
  public function getName(){ return $this->name; }
  public function getContent(){ return $this->content; }
  public function getDate(){ return $this->date; }
  public function getAuthor(){ return $this->author; }

  public function setId($id){
    if(is_int($id)){
      $this->id  = $id;
    }
  }

  public function setName($name){
    if(is_string($name) && !empty($name)){
      $this->name = htmlspecialchars($name);
    }
  }

  public function setContent($content){
    if(is_string($content) && !empty($content)){
      $this->content = htmlspecialchars($content);
    }
  }

  public function setDate($date){
    $this->date = $date;
  }

  public function setAuthor($author){
    if(is_string($author) && !empty($author)){
      $this->author = htmlspecialchars($author);
    }
  }
}
