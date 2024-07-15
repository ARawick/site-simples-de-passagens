<?php session_start(); ?>
<html>

<head>

  <title>Projeto parte 2</title>
  <link rel="stylesheet" href="styleprojeto.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <style>
   
  </style>
</head>

<body>
  <header>
   
      <p>🔍 🚌 Busco Passagens✈️ </p>
     


    <div class="header-content">
      <h1>Praia dos Carneiros</h1>
      <p>Conheça Praia dos Carneiros, A combinação de piscinas naturais, mar cristalino, uma igrejinha do século passado e coqueirais não poderia resultar em nada além de um cenário paradisíaco.</p>
      
    </div>
  </header>
<nav>

<ul>
  <li><a href="projeto.php">Home</a></li>
  <li><a href="#b1">Pacotes</a></li>
  <li><a href="#b2">Serviços</a></li>
  <li><a href="#b3">Contato</a></li>
  <li><a href="projetoparte2.php">Registrar-se</a></li>
  <li><a href="LoginProjeto.php">Login</a></li>
</ul>

<div>
  <input type="text" class="div-pesquisar" placeholder="Pesquisar...">
  <a class="search-btn"></a>

</div>
</nav>

<section >
  <h1 class="formss">Tela de registro:</h1>
  
  <div>
  <form action="Registro.php" method="post">
    <label for="name"> Nome Completo:</label>
    <input type="text" name="n" placeholder="Nome Completo..." required>
    <br>
    <label for="email"> Email:</label>
    <input type="text" name="e" placeholder="Email..." required>
     <br>
    <label for="password"> Insira uma Senha:</label>
    <input type="password" name="s" placeholder="Senha..." required>
     <br>
   
     
     
<label for="name">Cidade:</label>
<input type="text" name="cidade" required>
    <br>

     <label>Gênero:</label>
     <label>
      <br>
        <input  type="radio" name="genero" value="m"> Masculino.
     </label>
     <br>
     <label> 
        <input type="radio" name="genero" value="f"> Feminino.
     </label>
     <br>
     <label>
     <input type="radio" name="genero" value="desconhecido"> não se identifica com nenhum.
    </label>
     
    
    <br>
     <br>
    <label>Data de Nascimento: </label>
   
    <label>
      <input type="date" name="calendario" value="d">
      </label>
     
   <br>
   <br>
     
     <input type="submit" value="Registrar">
     
    </form>

 
  </div>
  <hr>
</section>

  <section class="servicos">
    <h1 id="b2" class="servicos-title">Serviços</h1>
    <div class="servicos-cards">
      <div class="card">
        <img class="card-image" src="tour.jpg">
        <div class="card-content">
          <h3>Tour guiados</h3>
          <p>Conheça tudo com nossos melhores guias.</p>
          <button>Saiba mais</button>
        </div>
      </div>

      <div class="card">
        <img class="card-image" src="fotografia.jpeg">
        <div class="card-content">
          <h3>Fotográfia Profissional</h3>
          <p>Temos os melhores e profissionais para tirar sua foto.</p>
          <button>Saiba mais</button>
        </div>
      </div>

      <div class="card">
        <img class="card-image" src="aluguel.png">
        <div class="card-content">
          <h3>Aluguel de Veículo</h3>
          <p>&nbsp;&nbsp;&nbsp;Carros variáveis, do básico ao luxo.&nbsp;&nbsp;&nbsp;</p>
          <button>Saiba mais</button>
        </div>
      </div>
    </div>
  </section>
  <ul class="ull">


    <section class="contato">
      <div class="contato-card">
        <h1 id="b3"class="coress">Entre em contato:</h1>
        <ul>
          <li>Busco Passagens✈️</li>
          <li>buscopassagens@gmail.com</li>
          <li>(00) 0000-0000</li>
        </ul>
      </div>

      <div id="map"></div>

    </section>


    <section class="contato">
      <div class="contato-card">
        <h1 class="coress">&nbsp;&nbsp;&nbsp;Sobre nós</h1>

        <ul>
          <li>Na Busco Passagem sua compra é totalmente segura!
            Para garantirmos que seus dados estejam sempre protegidos, não armazenamos nenhuma informação do cartão de
            crédito utilizado, seguindo os protocolos de criptografia e de segurança das principais instituições
            bancárias do Brasil.</li>
        </ul>
      </div>

      <div id="map"></div>
    </section>

  
    <section class="contato">
      <div class="contato-card">
        <h1 class="coress">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formas de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagamento</h1>
        <ul>
          <img src="pagamento.png">
          
        </ul>
      </div>
    
      <div id="map"></div>
  
    </section>



    <section class="contato">
      <div class="contato-card">
        <h1 class="coress">Redes Sociais:</h1>
        <ul>
          
          <li>WhatsApp:<i class="bi bi-whatsapp"></i>(00)0800-00</li>
          <li>Facebook:<i class="bi bi-facebook"></i>Busco Passagens</li>
          <li>Instagram:<i class="bi bi-instagram"></i>@BuscoPassagens</li>
          
        </ul>
      </div>
    
      <div id="map"></div>
  
    </section>
  
  </ul>
  <footer>
    <p>Copyright © Anthony Rawick 2022/Projetinho </p>
  </footer>

</body>

</html>