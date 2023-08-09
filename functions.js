function addProduct(code){
	var amount= document.getElementById(code).value;
	window.location.href='gestioncontrol.php?action=carrito&q=add&code='+code+'&amount='+amount;
}
function deleteProduct(code){
	window.location.href='gestioncontrol.php?action=carrito&q=remove&code='+code;
}