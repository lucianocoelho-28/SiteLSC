<?php
//Pegar o post
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//banco Dev
//$connect = mysqli_connect('localhost','root','','sitelsc');

//Banco Prod
$connect = mysqli_connect('localhost','id1952072_luciano','lsc123','id1952072_sitelsc');


$query = "INSERT INTO comentario(name, email, phone, message) VALUES ('$name','$email','$phone','$message')";
$insert = mysqli_query($connect,$query);


if($insert){
		echo "<script language='javascript' type='text/javascript'>alert('Mensagem Enviada com Sucesso!');window.location.href='contato.html'</script>";}
	else {
		echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel enviar a mensagem!');window.location.href='contato.html'</script>";
	}

?>