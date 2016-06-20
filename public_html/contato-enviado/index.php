<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>AudioClick - Contato</title>
    <?php include "../head.php" ?>
  </head>
  <body>
    <?php include "../header.php" ?>

    <section class="parallax-window" data-parallax="scroll" data-image-src="../img/contato-y.jpg" style="height: 300px"></section>
    
    <section>
      <div class="container" style="min-height: 400px;">
        <h3 class="page-header animateme" data-when="enter" data-from="0.5" data-to="0" data-scale="0.5" data-translatey="-50" data-opacity="0">Contato</h3>
          <fieldset>
            <legend>
<?php   
  $email_remetente = "contato@audioclick.com.br";
  $email_destinatario = "audioclickrs@gmail.com";
  //$email_destinatario = "eu.rafa@gmail.com";

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
 
  $email_conteudo = "<b>Nome:</b> $nome \n"; 
  $email_conteudo .= "<b>Email:</b> $email \n"; 
  $email_conteudo .= "<b>Telefone:</b> $telefone \n";
  $email_conteudo .= "\n<b>Mensagem:</b> \n\n $mensagem \n";
 
  $email_headers = implode("\n",array ( "From: $email_remetente", "Reply-To: $email", "Subject: Contato via site de: $nome", "Return-Path:  $email", "MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=ISO-8859-1" ) );
 
  if (mail ($email_destinatario, "Contato via site de: $nome", nl2br($email_conteudo), $email_headers)){
    echo "<br/><br/>Sua mensagem foi enviada com sucesso.<br/><br/>Muito obrigado!"; 
  } else {
    echo "<br/><br/>Falha no envio da mensagem. Tente Novamente.";
  }
?>
            </legend>
          </fieldset>
      </div>
    </section>

    <?php
      include "../footer.php";
      include "../scripts.php"
    ?>
  </body>
</html>