$(document).ready(function() {

	// function showDialog(id){
	// 		var dialog = $(id).data('dialog');
	// 		dialog.open();
	// }
	// function delay(sec) {
	// 	setTimeout("", sec * 1000);
	// 	document.forms[0].submit();
	// 	return false;
	// }
	// if (document.getElementById("ismForm")) {
	//     setTimeout("submitForm()", 5000); // set timout
	// }

	//click button add to car
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
