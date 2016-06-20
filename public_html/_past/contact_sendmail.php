<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    	<title>AudioClick Fonoaudiologia</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="AudioClick Fonoaudiologia" />
    	<meta name="keywords" content="" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>
    
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/slides.min.jquery.js"></script>		
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript">
    	</script>
    </head>

    <body>

<?php
include("header.php");
include("slider.php");
include("page_start.php");
include("menu.php");
?>
			<h3><img src="images/menu/contact.jpg" alt="Fale conosco" title="Fale conosco"/></h3>
			
            <br />
            
			<p align="justify">
			
<?php		
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//====================================================
	$email_remetente = "contato@audioclickrs.com.br"; // deve ser um email do dominio
	//====================================================
 
 
	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "contato@audioclickrs.com.br"; // qualquer email pode receber os dados
	//$email_reply = "$email";
	//$email_assunto = "Contato através do site";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['contact_name'];
	$email = $_POST['contact_email'];
	$telefone = $_POST['contact_phone'];
	$mensagem = $_POST['contact_message'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "<b>Nome:</b> $nome \n"; 
	$email_conteudo .= "<b>Email:</b> $email \n"; 
	$email_conteudo .= "<b>Telefone:</b> $telefone \n";
	$email_conteudo .= "\n<b>Mensagem:</b> \n\n $mensagem \n";
	//====================================================
 
	//Seta os Headers (Alterar somente caso necessario)
	//====================================================
	$email_headers = implode("\n",array ( "From: $email_remetente", "Reply-To: $email", "Subject: Contato via site de: $nome", "Return-Path:  $email", "MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=ISO-8859-1" ) );
	//====================================================
 
 
	//Enviando o email
	if (mail ($email_destinatario, $assunto, nl2br($email_conteudo), $email_headers)){
		echo "Sua mensagem foi enviada com sucesso!<br>Em breve retornaremos o contato."; 
	} else {
		echo "Falha no envio do e-mail. Tente Novamente.";
	}
?>

			</p>
            
            <br />

<?php
include("page_end.php");
include("footer.php");
?>

    </body>
</html>