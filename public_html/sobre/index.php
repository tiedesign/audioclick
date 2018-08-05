<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>AudioClick - Sobre</title>
    <?php include "../head.php" ?>
  </head>
  <body onload="initMap()">
    <?php include "../header.php" ?>

    <section class="parallax-window" data-parallax="scroll" data-image-src="../img/sobre-y.jpg" style="height: 300px"></section>

    <section id="sobre">
      <div class="container">
        <h3 class="page-header animateme" data-when="enter" data-from="0.5" data-to="0" data-scale="0.5" data-translatey="-50" data-opacity="0">Sobre</h3>
        <div class="row">
          <div class="col-lg-12">
            <p>
              A Audioclick é especialista em exames audiológicos e adaptação de próteses auditivas.
            </p>
            <p>
              Acompanhamos dia a dia as sucessivas mudanças ocorridas na legislação brasileira e a velocidade com que elas se processam. Buscamos em nossos processos o aprimoramento da qualificação profissional renovando as habilidades técnicas e realizando pesquisas em instituições nacionais e internacionais, conseguindo assim manter-nos atualizados e oferecer serviços cada vez mais seguros e confiáveis aos nossos clientes e parceiros.
            </p>
            <p>
              Os equipamentos são modernos e possuem um rígido controle de calibragem, alem disto o sistema é informatizado e individual para cada paciente.
            </p>
            <p>
              Mais do que exames, terapias e serviços, oferecemos aos nossos pacientes e clientes, uma estrutura de atendimento privilegiando as caracteristicas positivas e necessidades de cada um. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="profissionais">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12 text-center">
            <h3 class="page-header">Profissionais</h3>
            <div class="row">
              <div class="col-md-12 col-xs-12 text-center">
                <div class="item">
                  <img src="../img/profissionais/tatiana.jpg" width="200px" alt="Tatiana" class="img-circle">
                  <h5>Tatiana Andrade de Oliveira<br/><small>CRFa/RS 8725</small></h5>
                  <a class="btn btn-warning" href="../curriculos/index.php#tatiana">Ver currículo</a><br/><br/>
                </div>
              </div>
              <!--
              <div class="col-md-4 col-xs-12 text-center">
                <div class="item">
                  <img src="../img/profissionais/naiane1.jpg" width="200px" alt="Naiane" class="img-circle">
                  <h5>Naiane Montenegro Bandeira<br/><small>CRFa/RS 9322</small></h5>
                  <a class="btn btn-warning" href="../curriculos/index.php#naiane">Ver currículo</a><br/><br/>
                </div>
              </div>
              <div class="col-md-4 col-xs-12 text-center">
                <div class="item">
                  <img src="../img/profissionais/naiane2.jpg" width="200px" alt="Naiane" class="img-circle">
                  <h5>Janaina de Pieri<br/><small>Secretária</small></h5>              
                </div>
              </div>
              -->
            </div>
          </div>
          <div class="col-lg-6 col-xs-12 text-center">
            <h3 class="page-header">Parceiros</h3>
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="item">
                  <img src="../img/profissionais/carlos.jpg" width="200px" alt="Carlos" class="img-circle">
                  <h5>Carlos Brinckmann<br/><small>Otorrinoalringologista CRM 20180</small></h5>
                  <a class="btn btn-warning" href="../curriculos/index.php#carlos">Ver currículo</a><br/><br/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="clinica">
      <div class="container">
        <h3 class="page-header animateme" data-when="enter" data-from="0.5" data-to="0" data-scale="0.5" data-translatey="-50" data-opacity="0">Clínica</h3>
        <div class="row">
          <div class="col-lg-12 text-center">
            <img src="../img/clinica/clinica1.jpg" height="250px"/>
            <img src="../img/clinica/clinica2.jpg" height="250px"/>
            <img src="../img/clinica/clinica3.jpg" height="250px"/>
            <img src="../img/clinica/clinica4.jpg" height="250px" class="hidden"/>
            <img src="../img/clinica/clinica5.jpg" height="250px" class="hidden"/>
          </div>
        </div>
      </div>
    </section>

    <div id="missao-visao-valores" class="parallax-window" data-parallax="scroll" data-image-src="../img/contato-y.jpg">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12 item">
            <h3>Missão / Visão / Valores</h3>
            <br/>
            <h5>Oferecer um atendimento de alta qualidade pautado em princípios éticos e morais, buscando garantir a realidade dos nossos clientes.</h5>
          </div>
        </div>
      </div>
    </div>

    <div id="localizacao scrollme">
        <h3 class="page-header animateme" data-when="enter" data-from="0.5" data-to="0" data-scale="0.5" data-translatey="-50" data-opacity="0">Localização</h3>
        <div class="container">
          <div class="col-lg-12 text-center">
            <h4>
            MedPlex Santana<br/>
            Rua Gomes Jardim, n&ordm; 201 sala 909 B - Bairro Santana - Porto Alegre/RS
            </h4>
          </div>
        </div>
    </div>  
    <div id="mapa"></div>

    <?php
      include "../footer.php";
      include "../scripts.php"
    ?>
  </body>
</html>