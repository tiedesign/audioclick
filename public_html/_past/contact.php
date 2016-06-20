<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    	<title>AudioClick Fonoaudiologia - Contato</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="AudioClick Fonoaudiologia - Página de contato direto com a AudioClick." />
    	<meta name="keywords" content="AudioClick Fonoaudiologia contato e-mail escreva mensagem" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>
    
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/slides.min.jquery.js"></script>		
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript">
            function sendmail() {
                if ($("#contact_name").val().trim() == "") {
                    alert("Por favor preencha o seu nome.");
                    $("#contact_name").focus();
                } else if ($("#contact_email").val().trim() == "") {
                    alert("Por favor preencha o seu e-mail.");
                    $("#contact_email").focus();
                } else if ($("#contact_phone").val().trim() == "") {
                    alert("Por favor preencha o seu telefone.");
                    $("#contact_phone").focus();
                } else if ($("#contact_message").val().trim() == "") {
                    alert("Por favor digite a sua mensagem.");
                    $("#contact_message").focus();
                } else {
                    $("#fsend").submit();
                }
            }
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
            
			<p>
				Deixe sua mensagem aqui. 
			</p>
			
			<br/>
			
			<form id="fsend" action="contact_sendmail.php" method="POST">
				<table cellspacing="10">
					<tr>
						<td valign="top" width="240px">
							<label for="contact_name">Nome:</label>
							<br/>
							<input type="text" name="contact_name" id="contact_name" value="" maxlength="100"/>
							<br/>
							<label for="contact_email">E-mail:</label>
							<br/>
							<input type="text" name="contact_email" id="contact_email" value="" maxlength="100"/>
							<br/>
							<label for="contact_phone">Telefone:</label>
							<br/>
							<input type="text" name="contact_phone" id="contact_phone" value="" maxlength="100"/>
						</td>
						<td valign="top">
							<label for="contact_message">Mensagem:</label>
							<br/>
							<textarea name="contact_message" id="contact_message" rows="7"></textarea>
						</td>
					</tr>
					<tr>
						<td align="right" colspan="2"><button type="button" class="bt" id="send" onclick="sendmail();"><b>Enviar</b></button></td>
					</tr>
				</table>
			</form>

<?php
include("page_end.php");
include("footer.php");
?>

<!-- Google Code for Fale Conosco Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 955104579;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "Qx1DCPv43V0Qw_q2xwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/955104579/?label=Qx1DCPv43V0Qw_q2xwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

    </body>
</html>