<?php
// Product Matriz Xx4
$product = array
  (
	// [0]id - [1]name - [2]price - [3]Stock - [4]Rating - [5]img_file - [6]detail
  array(1, "Null Pack I",       2990,  12, 5, "null-logo.jpg",  "detail_1"),
  array(2, "Null Pack II",      3990,  10, 3, "null-logo.jpg",  "detail_2"),
	array(3, "Null Pack Starter", 990,   15, 4, "null-logo.jpg",  "detail_3"),
	//array(4, "Null Pack Pro",     8950,  "image4.png",  "detail_4"),
	//array(5, "Null Pack Tiny",    6490,  "image5.png",  "detail_5"),
	//array(6, "Null Pack Mega",    12890, "image6.png",  "detail_6"),
);

$_SESSION['product']=$product;


if(isset($_GET['id'])){
	$_SESSION['product']=$_SESSION['product'][$_GET['id']-1];
}

?>
