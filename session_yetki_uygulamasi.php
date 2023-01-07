<?php
session_start();
ob_start();
if(!$_SESSION){
    require 'login.php';
}
elseif($_SESSION['yetki']==1){
    require 'admin.php';
}
elseif($_SESSION['yetl,'==2]){
    require 'muhasebe.php';

}
elseif($_SESSION['yetki']==3){
    require 'kullanici.php';
}
else{
    require 'login.php';
}

?>