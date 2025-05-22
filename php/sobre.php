<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre Nós - +Saúde</title>
  <link rel="stylesheet" href="../css/sobre.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="icon" href="../Imagens/Saúde.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
</head>
<body>
<?php require_once __DIR__ . '/../pages/header.php'; ?>

  <main class="container">
    <section id="sobre-servicos" class="mb-5">
      <h2 class="section-title text-center">Sobre Nós</h2>
      <p>Na +Saúde, acreditamos que o cuidado com o bem-estar e a saúde deve ser acessível e organizado. Muitas academias enfrentam desafios por não possuírem sistemas próprios para gerenciar treinos e fichas de alunos. Nossa missão é resolver esse problema de forma prática e eficiente.</p>
      <p>Criamos uma aplicação web inovadora voltada para academias que buscam melhorar sua organização e oferecer uma experiência otimizada para alunos e instrutores. Nosso sistema permite que os personal trainers criem fichas de treino personalizadas, incluindo exercícios, séries, cargas e tempos de descanso.</p>
      <p>Com nossa solução, academias ganham mais organização, alunos têm um plano claro de treinos e instrutores podem focar no que fazem de melhor: transformar vidas através da atividade física.</p>
      <p>Nosso objetivo é ajudar academias de todo porte a se modernizarem e oferecerem um serviço de qualidade para seus clientes.</p>

      <div class="mapa-container">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="649" height="373" id="gmap_canvas" src="https://maps.google.com/maps?q=SEnai%20cfp%20fidelis%20reis&t=&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once __DIR__ . '/../pages/footer.php'; ?>

</body>
</html>
