<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>+Saúde - Academia Facilitada</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  
  <!-- Seu CSS personalizado -->
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/header.css" />

</head>
<body>

  <!-- include('header.php'); ou outro método -->
 <?php include 'pages\header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section text-center text-white py-5" style="background: var(--primary-dark);">
    <div class="container">
      <h1 class="hero-title">Transforme sua academia com tecnologia</h1>
      <p class="hero-subtitle">Solução digital para fichas de treino personalizadas e gestão eficiente de alunos</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="servicos.php" class="btn btn-light btn-lg px-4">Conheça nossos serviços</a>
        <a href="contato.php" class="btn btn-outline-light btn-lg px-4">Fale conosco</a>
      </div>
    </div>
  </section>

  <main class="container my-5">

    <!-- Sobre -->
    <section class="mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 class="section-title mb-4">Bem-vindo à +Saúde</h2>
          <div class="bg-white p-4 rounded shadow-sm">
            <p class="lead">Nossa empresa entende os desafios das academias na gestão de treinos. Muitas ainda carecem de sistemas eficientes.</p>
            <p class="lead">Desenvolvemos uma aplicação web intuitiva para facilitar a criação e o acompanhamento de fichas de treino personalizadas.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Destaques -->
    <section class="mb-5">
      <h2 class="section-title text-center mb-4">Como podemos ajudar sua academia</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 text-center p-4">
            <i class="fas fa-tasks fa-2x mb-3 text-success"></i>
            <h4 class="card-title">Gestão de Treinos</h4>
            <p class="card-text">Crie e acompanhe fichas de treino personalizadas com facilidade.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 text-center p-4">
            <i class="fas fa-chart-line fa-2x mb-3 text-success"></i>
            <h4 class="card-title">Acompanhamento</h4>
            <p class="card-text">Relatórios e métricas para monitorar o progresso dos alunos.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 text-center p-4">
            <i class="fas fa-mobile-alt fa-2x mb-3 text-success"></i>
            <h4 class="card-title">Acesso Mobile</h4>
            <p class="card-text">Acesse os treinos de qualquer lugar pelo celular.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Carrossel -->
<section class="mb-5">
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Imagens/atleta-em-uma-esteira-na-academia-homem-sem-camisa-na-academia-estilo-de-vida-esportivo.jpg" class="d-block w-100" alt="Treinos Personalizados" />
      </div>
      <div class="carousel-item">
        <img src="Imagens/desportista-suada-com-uma-toalha-se-sentindo-exausta-e-fazendo-uma-pausa-no-camarim-ginasio.jpg" class="d-block w-100" alt="Tecnologia Integrada" />
      </div>
      <div class="carousel-item">
        <img src="Imagens/jovem-europeu-pensativo-e-atraente-usando-uma-camisa-sem-mangas-e-shorts-envolvendo-bandagens-de-boxe.jpg" class="d-block w-100" alt="Acompanhamento Profissional" />
      </div>
      <div class="carousel-item">
        <img src="Imagens/homem-de-tiro-medio-segurando-kettlebell.jpg" class="d-block w-100" alt="Resultados Garantidos" />
      </div>
   

     <div class="carousel-item">
            <img src="Imagens/jovem-fazendo-exercicios-e-trabalhando-duro-na-academia-e-curtindo-seu-processo-de-treinamento.jpg" class="d-block w-100" alt="Acompanhamento Profissional" />
           </div>

            <div class="carousel-item">
            <img src="Imagens/jovem-macho-de-angulo-alto-na-pratica-de-ginastica.jpg" class="d-block w-100" alt="Acompanhamento Profissional" />
           </div>

            <div class="carousel-item">
            <img src="Imagens/jovem-mulher-atletica-descansando-apos-o-exercicio-na-maquina-de-remo-em-uma-academia.jpg" class="d-block w-100" alt="Acompanhamento Profissional" />
           </div>

            <div class="carousel-item">
            <img src="Imagens/mulher-jovem-segurando-peso-em-ginasio.jpg" class="d-block w-100" alt="Acompanhamento Profissional" />
           </div>
 </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</section>


    <!-- CTA -->
    <section class="cta-section text-center bg-light py-5">
      <div class="container">
        <h2 class="mb-3">Pronto para transformar sua academia?</h2>
        <p class="lead mb-4">Experimente gratuitamente nossa plataforma por 14 dias e veja os resultados.</p>
        <a href="./php/contato.php" class="btn btn-secondary btn-lg px-4">Comece agora</a>
      </div>
    </section>

  </main>

  <!-- include('footer.php'); ou outro método -->
  <?php include './pages/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const myCarousel = document.querySelector('#mainCarousel');
    new bootstrap.Carousel(myCarousel, {
      interval: 5000,
      wrap: true
    });
  </script>
</body>
</html>
