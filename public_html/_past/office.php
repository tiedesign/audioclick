<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    	<title>AudioClick Fonoaudiologia - Consultório</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="AudioClick Fonoaudiologia - Página do consultório da Audioclick com fotos, detalhando a estrutura da empresa, especialidades, diferenciais, missão e valores." />
    	<meta name="keywords" content="AudioClick Fonoaudiologia consultório fotos empresa especialidades diferenciais missão valores equipamentos atendimento princípios estrutura profissionais" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/galleriffic-2.css" type="text/css" media="screen"/>
    
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/slides.min.jquery.js"></script>		
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript">
            $(document).ready(function() {        
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '200px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 0,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					imageContainerSel:         '#slideshow',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         false,
					enableHistory:             false,
					autoStart:                 true,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
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
			<h3><img src="images/menu/office.jpg"/></h3>
			
            <br />
            
            <div id="gallery" class="content">
				<div class="slideshow-container">
					<div id="loading" class="loader"></div>
					<div id="slideshow" class="slideshow"></div>
				</div>
			</div>

            <div id="office_content">
            <p>
                A AudioClick &eacute; um consult&oacute;rio de fonoaudiologia especializado em exames audiol&oacute;gicos, reabilita&ccedil;&atilde;o vestibular, adapta&ccedil;&atilde;o de pr&oacute;tese auditiva, terapia de dist&uacute;rbios vocais e aperfei&ccedil;amento, adapta&ccedil;&atilde;o e reabilita&ccedil;&atilde;o da motricidade orofacial e terapia de disturbios de linguagem.
            </p>
            
            <p>
                Acompanhamos dia a dia as sucessivas mudan&ccedil;as ocorridas na legisla&ccedil;&atilde;o brasileira e a velocidade com que elas se processam. Buscamos em nossos processos o aprimoramento da qualifica&ccedil;&atilde;o profissional renovando as habilidades t&eacute;cnicas e realizando pesquisas em institui&ccedil;&otilde;es nacionais e internacionais, conseguindo assim manter-nos atualizados e oferecer servi&ccedil;os cada vez mais seguros e confi&aacute;veis aos nossos clientes e parceiros.
            </p>
            
            <p>
                Os equipamentos s&atilde;o modernos e possuem um r&iacute;gido controle de calibragem, alem disto o sistema &eacute; informatizado e individual para cada paciente.                            
            </p>

            <p>
                Nossa miss&atilde;o &eacute; oferecer um atendimento de alta qualidade pautado em princ&iacute;pios &eacute;ticos e morais, buscando garantir a realidade dos nossos clientes.
            </p>

            <p>
                Mais do que exames, terapias e servi&ccedil;os, oferecemos aos nossos pacientes e clientes, uma estrutura de atendimento privilegiando as caracteristicas positivas e necessidades de cada um. 
            </p>

            <p>
                <a href="members.php">Conhe&ccedil;a os nossos profissionais</a>
            </p>

            <br />
            </div>

<?php
include("gallery.php");
?>

<?php
include("page_end.php");
include("footer.php");
?>

    </body>
</html>