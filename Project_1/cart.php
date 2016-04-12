<?php
	include("common/head.php");
// add id product to cart
if(isset($_GET['prod_id'])){
if($_GET['prod_id']){
	if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array($_GET['prod_id']);
	}else{
			array_push($_SESSION['cart'], $_GET['prod_id']);
	};
};
};
	include("common/menu.php");
?>
<!-- ############################################# -->
<div class="page-content">

<div class="container">
	<div class="grid">
<div class="row cells3">
  <div class="cell colspan2">


</div>
</div>
</br>
</br>
</br>
</div>
</div>
</div>
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
