    </main>
<link rel="stylesheet" href="css/footer.css">
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-links">
                        <h5>+Saúde</h5>
                        <p>Soluções tecnológicas para gestão de academias e profissionais de educação física.</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-links">
                        <h5>Links Rápidos</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/index.php" class="text-white-50">Início</a></li>
                            <li class="mb-2"><a href="/php/sobre.php" class="text-white-50">Sobre Nós</a></li>
                            <li class="mb-2"><a href="/php/servicos.php" class="text-white-50">Serviços</a></li>
                            <li class="mb-2"><a href="/php/contato.php" class="text-white-50">Contato</a></li>
                            <li><a href="contato.html" class="text-white-50">Experimente Grátis</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="footer-links">
                        <h5>Contato</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-phone me-2"></i> (34) 1234-5678</li>
                            <li class="mb-2"><i class="fas fa-envelope me-2"></i> contato@maissaude.com</li>
                            <li><i class="fas fa-map-marker-alt me-2"></i> Av. Nenê Sabino, 1801, Uberaba - MG</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="text-center pt-4 mt-4 border-top border-secondary">
                <p class="mb-0">&copy; 2025 +Saúde - Academia Facilitada. Todos os direitos reservados.</p>
                <p class="mb-0">Desenvolvido por Adilson Gomides Junior, Bianca Martins Oliveira, Gabriel da Silva Ribeiro, Pedro Lucas Silva e Sofia Tresse Pires</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Ativar classe active no menu
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = location.pathname.split('/').pop() || 'index.html';
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>