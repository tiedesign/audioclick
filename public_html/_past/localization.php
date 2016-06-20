<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    	<title>AudioClick Fonoaudiologia - Localização</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="AudioClick Fonoaudiologia - Localização no mapa do consultório da AudioClick em Porto Alegre - RS." />
    	<meta name="keywords" content="AudioClick Fonoaudiologia - localização mapa consultório endereço goetche bairro moinhos de vento porto alegre rs" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>
    
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/slides.min.jquery.js"></script>		
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript">
            $(document).ready(function(){
                $("#howto_bus").css("float", "right");
                $("#howto_bus").css("cursor", "pointer"); 
                $("#howto_bus").click(function() {
                    window.location.href = "localization_bus.php";
                }); 
            });
    	</script>
    </head>

    <body>

<?php
include("header.php");
include("slider.php");
include("page_start.php");
include("menu.php");
?>
			<h3><img src="images/menu/localization.jpg" alt="Localização" title="Localização"/></h3>
			
            <br />

			<center>
				<div id="map">
                    <p>
                        <b>Endere&ccedil;o:</b> Av. Goethe, 71 sala 507
        				<br/>Bairro Moinhos de Vento - Porto Alegre/RS
                        <br /><br />
                        <b>*</b> Parqu&iacute;metro e Estacionamentos da Rua Dona Laura e estacionamento no Pr&oacute;prio Pr&eacute;dio do Consult&oacute;rio. 
        				<p><strong>Outros locais de atendimento:</strong></p>
        				<img id="howto_bus" src="images/howto.jpg" alt="Veja como chegar" title="Veja como chegar"/>			
        				<ul>
            				<li>Lajeado/RS</li>
        					<li>Taquari/RS</li>
        					<li>Sapiranga/RS</li>
        				</ul>
                    </p>

                   	<p align="justify" id="localizationTitle">
        				Mapa do Consult&oacute;rio AudioClick.
        			</p>
                    <br />			
					<iframe width="850" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Audioclick+-+Consult%C3%B3rio+de+Fonoaudiologia+-+Avenida+Goethe,+Porto+Alegre+-+Rio+Grande+do+Sul&amp;aq=0&amp;sll=-30.026968,-51.206417&amp;sspn=0.018132,0.054932&amp;ie=UTF8&amp;hq=Audioclick+-+Consult%C3%B3rio+de+Fonoaudiologia+-&amp;hnear=Av.+Goethe+-+Porto+Alegre+-+Rio+Grande+do+Sul,+90430-100&amp;cid=13449699273732161606&amp;ll=-30.019909,-51.203842&amp;spn=0.026011,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
				</div>
			</center>

            <br />

<?php
include("page_end.php");
include("footer.php");
?>

    </body>
</html>