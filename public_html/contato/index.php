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
      <div class="container">
        <h3 class="page-header animateme" data-when="enter" data-from="0.5" data-to="0" data-scale="0.5" data-translatey="-50" data-opacity="0">Contato</h3>
        <form action="../contato-enviado/index.php" method="POST">
          <fieldset>
            <legend>Fale conosco</legend>
            <div class="row">
              <div class="col-md-12">
                <input type="text" name="nome" id="nome"/>
                <label for="nome">Nome</label>
              </div>
              <div class="col-md-12">
                <input type="text" name="email" id="email"/>
                <label for="email">E-mail</label>
              </div>
              <div class="col-md-12">
                <input type="text" name="telefone" id="telefone"/>
                <label for="telefone">Telefone</label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Mensagem</legend>
            <div class="row">
              <div class="col-md-12">
                <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <br/>
                <button type="submit" class="btn btn-warning">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </section>

    <?php
      include "../footer.php";
      include "../scripts.php"
    ?>
  </body>
</html>