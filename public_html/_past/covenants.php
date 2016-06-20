<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    	<title>AudioClick Fonoaudiologia - Convênios</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="AudioClick Fonoaudiologia - Página que apresenta os convênios da AudioClick" />
    	<meta name="keywords" content="AudioClick Fonoaudiologia convênios empresas conveniadas parceiros caixa advogados apced bradesco saúde sulmed ctt maxwell cabesp capesep sulamerica sogipa salute assefaz aabb criança feliz vitta social fusex cassi casf" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>
    
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/slides.min.jquery.js"></script>		
		<script type="text/javascript" src="js/jquery.shuffle.js"></script>
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript">
            $(document).ready(function() {        
				var i = 0;
				var arr = new Array();
				arr[i++] = "caixa_advogados.jpg|Caixa Advogados";
				arr[i++] = "apcef.jpg|APCEF";
				arr[i++] = "bradesco_saude_reembolso.jpg|Bradesco Saúde";
				arr[i++] = "sulmed.jpg|Sulmed";
				arr[i++] = "ctt_maxwell.jpg|CTT Maxwell";
				arr[i++] = "cabesp.jpg|Cabesp";
				arr[i++] = "capesesp.jpg|Capesesp";
				arr[i++] = "sulamerica_reembolso.jpg|Sulamerica";
				arr[i++] = "sogipa.jpg|Sogipa";
				arr[i++] = "salute.jpg|Salute";
				arr[i++] = "assefaz.jpg|Assefaz";
				arr[i++] = "aabb.gif|AABB";
				arr[i++] = "crianca_feliz.jpg|Criança Feliz";
				arr[i++] = "vitta.jpg|Vitta";
				arr[i++] = "social.jpg|Social";
				arr[i++] = "fusex.jpg|Fusex";
				arr[i++] = "cassi.jpg|Cassi";
				arr[i++] = "casf.jpg|CASF";
				//arr[i++] = "caixa.jpg";
				
				// shuffle
				arr = $.shuffle(arr);
				
				var c = "";
				for (i = 0; i < arr.length; i++) {
				    var a = arr[i].split("|");
				    var img = a[0];
				    var des = a[1];
					c += "<img class=\"covenants\" align=\"center\" src=\"images/covenants/" + img + "\" alt=\"" + des + "\" title=\"" + des + "\" />";
				}
				$("#covenants_logos").html(c);
				$("#covenants_logos").css("display", "block");
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
			<h3><img src="images/menu/covenants.jpg" alt="Convênios" title="Convênios"/></h3>
			
			<br/>

			<div id="covenants_logos" style="display: none;">
			
			</div>

<?php
include("page_end.php");
include("footer.php");
?>

    </body>
</html>