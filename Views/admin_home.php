<?php
$title = "Home Page's Administration";
ob_start();
?>

<div class="article">
  <h2>Add an Article to the Home Page :</h2><br>

  <form class="" action="controller_home.php?code=add" method="post">
    <input type="text" name="title" placeholder="Title" required /><br><br>
    <textarea name="editor" rows="8" cols="80"></textarea><br>
    <input type="submit" name="btn_add_article" value="Add" />
  </form>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>
