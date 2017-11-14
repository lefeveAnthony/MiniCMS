<?php
require "src/Connection.php";
$db = Connection::getDb();

require "Models/model_home.php";
$model = new model_Home($db);

if(isset($_GET['code']) && $_GET['code'] == "add"){
  if(isset($_POST['btn_add_article'])){
    require "src/Article.php";
    $article = new Article([
      "id" => null,
      "name" => $_POST['title'],
      "content" => $_POST['editor'],
      "date" => date("Y-m-d H:i:s"),
      "author" => "Anthony"
    ]);

    $model->add($article);
    require "Views/view_home.php";
  }

}else{
  $articles = $model->selectList();
  require "Views/view_home.php";
}
 ?>
