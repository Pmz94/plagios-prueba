<?php

/* @var $api Reports */
require_once '../init-api.php';

$params = [];
$files = [];

if($_POST['title']) $params['title'] = $_POST['title'];
if(isset($_POST['text'])) $params['text'] = $_POST['text'];
if(isset($_POST['url'])) $params['url'] = $_POST['url'];

if(isset($_FILES['file-0'])) $files['file'] = $_FILES['file-0'];

//$params = [
//	'title' => $_POST['title'],
//	'text' => $_POST['text'], //Primero toma en cuenta el texto
//	'url' => $_POST['url'] //A lo ultimo toma en cuenta el url
//];

//$files = [
//	'file' => $_FILES['file-0'] //Segundo toma en cuenta el archivo
//	//'file' => realpath('pdf-sample.pdf')
//];

echo $api->createAction($params, $files);