<?php

if(isset($_GET['code']) && $_GET['code'] == "admin"){
  require "Controllers/controller_admin.php";
}else{
  require "Controllers/controller_home.php";
}
