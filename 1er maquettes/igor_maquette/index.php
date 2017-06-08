<?php

session_start();

if(isset($_GET['presentation'])){
	require_once 'page/presentation.php';
}
elseif (isset($_GET['alter'])) {
	require_once 'page/alter.php';
}
elseif (isset($_GET['formation'])) {
	require_once 'page/formation.php';
}
elseif (isset($_GET['article'])) {
	require_once 'page/article.php';
}
elseif (isset($_GET['desc'])) {
	require_once 'page/desc.php';
}
elseif (isset($_GET['private'])) {
	require_once 'page/private.php';
}elseif (isset($_GET['comms'])) {
	require_once 'page/comms.php';
}elseif(isset($_GET['contact'])){
	require_once 'page/contact.php';
}else{
	require_once 'page/accueil_m.php';
}