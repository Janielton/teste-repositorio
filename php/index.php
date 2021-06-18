<?php 
$lang = isset($_GET['lg']) ? $_GET['lg']:"";
if($lang == "") die();
$saudacao = ($lang == "es" ? "Hola mundo": $lang == "en") ? "Hello World":"Olá, mundo";
print($saudacao);
