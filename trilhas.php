<?php
session_start();
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: index.php");
}

include('cabecalho.php');

?>

<center>
  <h4>Transição profissional para a área de tecnologia, por onde começar?</h4>
</center>
<br>
<br>
<!-- banner -->
<section>
  <div class="container">
    <img class="trilhas" src="images/background.png" width= "100%" alt="">
  </div>
</section>
<br>
<br>

<!-- end banner -->

<section>
  <center>
    <h4>Olá <?php echo $_SESSION['user_name'] ?>, comece a estudar com as Trilhas_Tech.</h4>
  </center>
  <br>
</section>

<section class="main-section">
  <div class="main-02">

    <a class="card-link container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/Logo.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Transição Profissional</h4>
          <p class="card-text">Como iniciar minha transição de carreira com 30 anos? Por onde devo começar?</p>
          <p class="card-saibamais"><a href="trilhaTransCarreira.php" target="_blank">Começar agora</a></p>
        </div>
      </div>
    </a>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/Logo.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Lógica de Programação</h4>
          <p class="card-text">Conheça a base para ser um bom programador(a) e iniciar seu conhecimento em tecnologia. </p>
          <p class="card-saibamais"><a href="https://encurtador.com.br/myOQ0" target="_blank">Começar agora</a></p>
        </div>
      </div>
    </div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/Logo.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Card Teste</h4>
          <p class="card-text">Card criado somente para testes. Mudar nome e descrição do card assim que possível.</p>
          <p class="card-saibamais"><a href="https://encurtador.com.br/rYZ25" target="_blank">Começar agora</a></p>
        </div>
      </div>
    </div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/Logo.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Card teste</h4>
          <p class="card-text">Card criado somente para testes. Mudar nome e descrição do card assim que possível.</p>
          <p class="card-saibamais"><a href="https://encurtador.com.br/rYZ25" target="_blank">Começar agora</a></p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include('rodape.php'); ?>