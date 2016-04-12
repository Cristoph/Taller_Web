<?php
	$user="user";
	$pass="1234";
	$name="John Smith";


if(isset($_POST['logout'])){
	session_destroy();
};

if(isset($_POST['user'])){
if($_POST['user']==$user && $_POST['pass']==$pass){
		$_SESSION['name']=$name;
		//$i = array();
		//$_SESSION['cart'] = $a;
		//echo "bienvenido ".$_SESSION['nombre'];
	}
}




?>



<!-- <script>
$.Notify({
    caption: 'Notify title',
    content: 'Notify content',
    icon: "<span class='mif-user'></span>",
		shadown: true,
		keepOpen: true,
});
</script> -->

<?php if(!isset($_SESSION['name'])){ ?>



		<a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Ingresar</a>
		<div class="app-bar-drop-container place-right" data-role="dropdown" data-no-close="true">
				<div class="padding20">
		<form action="home.php" method="post">
				<!--h4 class="text-light">Login to service...</h4-->
				<div class="input-control text">
						<span class="mif-user prepend-icon"></span>
						<input type="text" name="user" placeholder="Usuario">
				</div>
				<div class="input-control text">
						<span class="mif-lock prepend-icon"></span>
						<input type="password" name="pass" placeholder="Contraseña">
				</div>
				<!--label class="input-control checkbox small-check">
							<input type="checkbox">
							<span class="check"></span>
							<span class="caption">Remember me</span>
							</label-->
				<div class="form-actions">
						<button class="button primary" type="submit">Entrar</button>
						<!--button class="button link fg-grayLighter">Cancel</button-->
				</div>
		</form>
		</div>
		</div>


<?php }else{ ?>
	<a class="dropdown-toggle fg-white"><span class="mif-user"></span> <?php echo $_SESSION['name'] ?></a>
	<div class="app-bar-drop-container place-right" data-role="dropdown" data-no-close="true">
		<div class="padding10">
			<form action="home.php" method="post">
						<button class="button primary" type="submit" name="logout" value="yes">Salir</button>
			</form>
		</div>
	</div>



<?php } ?>
