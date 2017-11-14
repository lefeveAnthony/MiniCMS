<?php

class model_home{

  private $db;

  public function __construct(PDO $db){
    $this->db = $db;
  }

  public function add(Article $article){
    $req = $this->db->prepare("insert into article values (Null, :name, :content, :date, :author)");
    $req->execute(array(
      ":name" => $article->getName(),
      ":content" => $article->getContent(),
      ":date" => $article->getDate(),
      ":author" => $article->getAuthor()
    ));
  }

  public function update(Article $article){

  }

  public function delete($id){

  }

  public function selectOne($id){
    $req = $this->db->prepare("select article_name as name, article_content as content from article where article_id = $id");
    $req->execute();
    $articles = $req->fetchAll();

    return $articles;
  }

  public function  selectList(){
    $req = $this->db->prepare("select * from article");
    $req->execute();
    $articles = $req->fetchAll();

    return $articles;
  }
}
 ?>
