<?php 
$currentPage = 'contato'; // Para marcar o link ativo no header
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Mais Saúde</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <!-- Favicon -->
    <link rel="icon" href="../Imagens/Saúde.png" type="image/x-icon">
</head>
<body>
    <?php require_once __DIR__ . '/../pages/header.php'; ?>

    <main class="container-contato">
        <section id="contato">
            <h2 class="titulo-principal">Fale Conosco</h2>
            <p class="subtitulo">Preencha o formulário abaixo para entrarmos em contato</p>
            
            <form action="https://formspree.io/f/xldejypd" method="POST" class="formulario-contato">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="empresa">Nome da Empresa:</label>
                    <input type="text" id="empresa" name="empresa">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="numero">Telefone:</label>
                    <input type="tel" id="numero" name="numero" required>
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Mensagem</button>
            </form>
        </section>
    </main>

<?php require_once __DIR__ . '/../pages/footer.php'; ?>

    <!-- Scripts -->
    <script src="../js/hamburguer.js"></script>
</body>
</html>