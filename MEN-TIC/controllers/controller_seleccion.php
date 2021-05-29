<?php

require_once("../models/model_seleccion.php");

if (!isset($_POST) || empty($_POST)) {

	$categories=getCategories();

    require_once("../views/view_seleccion.php");
 
}else{


	 $category = $_POST['categories'];

	 var_dump($category);

}

?>