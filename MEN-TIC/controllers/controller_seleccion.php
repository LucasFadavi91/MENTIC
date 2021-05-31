<?php

require_once("../models/model_seleccion.php");

if (!isset($_POST) || empty($_POST)) {

	$categories=getCategories();

    require_once("../views/view_seleccion.php");
 
}else{


	 $categories = $_POST['categories'];

	 if (is_array($categories)){

	  foreach ($categories as $category) 
		{
	 		var_dump($category);
		}
	}
            /*foreach ($_POST['categories'] as $categories) {
                var_dump($categories);
            }*/
        
}	

?>