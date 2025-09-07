<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
		$nome = $_POST['nomeremetente'];
		$email = $_POST['emailremetente'];
		$telefone = $_POST['telefone'];
		$assunto = $_POST['assunto2'];
		$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "servidor@mangueirasdeincendiobrasil.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "contato@mangueirasdeincendiobrasil.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "hsaseguranca@gmail.com"; 
	$email_assunto = "Formulario de contato do site"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Assunto = $assunto \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 




	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
				header("Location: mail_ok.php");
					} 
			else{ 
				header("Location: mail_erro.php");
			} 
	//====================================================
} 
?>