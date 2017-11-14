<?php
$title = "Home Page";
ob_start();
 ?>

<div class="titlePage">
  <h1>Home Page</h1>
</div>

<?php
foreach ($articles as $article) :
?>

<div class="article">
  <h2><?php echo $article['article_name']; ?></h2>
  <p><?php echo $article['article_content']; ?></p>
</div>

<?php endforeach ?>
</div>


<?php
$content = ob_get_clean();
require "template.php";
 ?>
