<?php 
include 'db.php';
session_start();

if(!isset($_SESSION['usuario'])) {
	header('Location: ./');
	die;
}

// IMPLEMENTAR BORRAR AQUÍ
  $id = $db->escape_string($_GET['id']);
  $result = $db->query("DELETE FROM noticias WHERE id_noticia=$id");
  if(!$result) {
    $_SESSION['error'] = $db->error;
    header('Location: editar-noticia.php');
  } else {
    header('Location: welcome.php');
  }

header("Location: welcome.php");
