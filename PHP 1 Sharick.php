<?php
//echo "Bienvenidos a la tienda de Juancho";
	
	$verduras = array("Tomates","cebolla","ajo","apio","brocoli","remolacha","lechuga");
	$verduras[]= "nabos";
// print_r($verduras);


// $name = "Sharick";
// echo $name;
	
// unset ($name);
// echo $name;
	
	
// $name = ["Melisa","Laura","Sharick","Clara","Sara"];
// unset($name[2]);
// print_r ($name);
	
	$verdurasEliminar = "apio";
	$boton = array_search($verdurasEliminar,$verduras);
	
	if 	($boton!==false){

	 
	  unset($verduras[$boton]);
	}
	
	print_r($verduras);
	
?>
