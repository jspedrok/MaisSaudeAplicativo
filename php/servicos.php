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
  <link rel="stylesheet" href="../css/servicos.css" />
   <link rel="stylesheet" href="../css/footer.css" />
</head>

<?php require_once __DIR__ . '/../pages/header.php'; ?>

<!-- Seção Sobre Serviços -->
<section id="sobre-servicos" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-4">Sobre Nossos Serviços</h2>
                <p class="lead text-center">Nosso principal objetivo é oferecer soluções digitais que facilitem a vida das academias e de seus alunos.</p>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card mb-4 border-0 shadow-sm plano-card">
                            <div class="card-body">
                                <h3 class="h4">Sites para Academias</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Geradores automáticos de planos semanais</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Área de login para alunos e professores</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Ferramentas para monitorar progresso físico</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Seções personalizáveis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm plano-card">
                            <div class="card-body">
                                <h3 class="h4">Benefícios</h3>
                                <p>Com um site moderno e eficiente, ajudamos academias a economizarem tempo e a oferecerem um serviço diferenciado para seus alunos, fortalecendo a marca e aumentando a retenção de clientes.</p>
                                <div class="d-grid">
                                    <a href="#contato" class="btn btn-success">Solicitar Demonstração</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção Planos -->
<section id="planos" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Nossos Planos</h2>
        <p class="text-center lead mb-5">Escolha o plano ideal para sua academia</p>

        <div class="row g-4">
            <!-- Plano Básico -->
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 plano-card">
                    

<div class="card-header bg-plano-basico text-white text-center py-3">
  <h3 class="h4 mb-0">Plano Básico</h3>
</div>

                      
                    <div class="card-body text-center">
                        <h4 class="card-title pricing-card-title">R$ 199<small class="text-muted fw-light">/mês</small></h4>
                        <p class="text-muted">Ideal para academias iniciantes</p>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="mb-2"><i class="fas fa-check text-
                            me-2"></i>Site institucional</li>
                            <li class="mb-2"><i class="fas fa-check text-successme-2"></i>Gerador de planos básicos</li>
                            <li class="mb-2"><i class="fas fa-check text-successme-2"></i>Suporte técnico básico</li>
                            <li class="mb-2"><i class="fas fa-check text-successme-2"></i>Até 50 alunos</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-4">
                        <a href="#contato" class="btn btn-outline-success w-100">Escolher Plano</a>
                    </div>
                </div>
            </div>
            
            <!-- Plano Médio (Destaque) -->
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 plano-card shadow-lg">
                    <div class="card-header bg-plano-medio text-white text-center py-3">
                        <h3 class="h4 mb-0">Plano Médio</h3>
                        
                        <span class="badge bg-white text-success mt-2">Mais Popular</span>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title pricing-card-title">R$ 399<small class="text-muted fw-light">/mês</small></h4>
                        <p class="text-muted">Para academias em crescimento</p>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Site personalizado</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gerador de planos semanais</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Suporte prioritário</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Até 150 alunos</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Área do professor</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-4">
                        <a href="#contato" class="btn btn-success w-100">Escolher Plano</a>
                    </div>
                </div>
            </div>
            
            <!-- Plano Avançado -->
            <div class="col-md-4">
                <div class="card h-100 border-success border-2 plano-card">
                    <div class="card-header bg-plano-avancado text-dark text-center py-3">
                        <h3 class="h4 mb-0">Plano Avançado</h3>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title pricing-card-title">R$ 699<small class="text-muted fw-light">/mês</small></h4>
                        <p class="text-muted">Para academias premium</p>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Site totalmente customizado</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gerador avançado de planos</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Suporte premium 24/7</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Alunos ilimitados</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Relatórios avançados</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Integração com apps</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-4">
                        <a href="#contato" class="btn btn-outline-success w-100">Escolher Plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../pages/footer.php'; ?>