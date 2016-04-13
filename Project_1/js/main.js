$(document).ready(function() {

	// --------------------------------------------------
	// open dialog when pay finish and redirect to home
	$("button#thk").click( function() {
	console.log('thk');
	var dialog = $('#dialog').data('dialog');
	        dialog.open();
					setTimeout(function(){
							location.replace('home.php?pay=ok');
					}, 3000);
		});
	// --------------------------------------------------
	//
	$("button#cart_add").click( function() {
		console.log('cart_add asdasda');
		$.Notify({
		    caption: 'Producto',
		    content: 'Agregado al Carro',
				type: 'success',
				shadow: true,
		    icon: "<span class='mif-cart'></span>",
				timeout: 4000,
		});
		// $.ajax({
		//         url: "cart.php",
		//         type: "post",
		//				 cache: false,
		//         data: 'prod_id=1',
		//         success: function (response) {
		//            // you will get response from your php page (what you echo or print)
		//
		//         },
		//         error: function(jqXHR, textStatus, errorThrown) {
		//            console.log(textStatus, errorThrown);
		//         }
		//
		//
		//     });
		//$('span#cart').text(cart_count + 1);
		setTimeout(function(){
		    location.reload();
		}, 2000);
	});

});// end document ready
