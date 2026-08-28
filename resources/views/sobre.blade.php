<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre-Nós</title>
    <link rel="stylesheet" href="build/assets/css/sobre.css">
</head>
<body>

    <div class="cabeca_escura"></div><!--Pare de cima escura-->
 <header class="cabecalho"> <!--Inico do cabeçalho-->
    <div class="logotipo">
      <a href="index.html"><img src="build/assets/img/icon/logo.png" alt="logo_DevSpark" /></a>
    </div>

    <nav class="nav_bar"><!--Inicio da nav_bar>-->
      <ul class="nav_lista">
        <li><a href="index.html">Página inicial</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#pacotes">Pacotes</a></li>
        <li><a href="#contactar">Contactos</a></li>
        <li><a href="sobre.html">Sobre-Nós</a></li>
      </ul>
    </nav><!--Fim da nav_bar-->

    <div class="botao_menu">
      <button class="menu">
        <img class="abrir" src="build/assets/img/icon/menu.png" alt="mneu_mobile" />
        <img class="fechar" src="build/assets/img/icon/fechar.png" alt="mneu_mobile" />
      </button>
    </div>
  </header><!--Fim do cabeçalho-->

    <!--Botões flutuantes-->
  <div class="flutuante">
    <a href="{{route('spark')}}"><img src="build/assets/img/icon/spark.png" alt="chatboot da empresa"></a>
  </div>

    <main class="conteudo_principal">
        <section class="intro">
            <div class="sobre">
                Sobre-Nós
            </div>
          <h2 class="reveal">Mais que código <span>entregamos soluções</span>.</h2>
          <p class="reveal">
            A DevSpark é uma startup 100% angolana, centralizada no sector tecnológico,  com especialidade em criação de websites, sistemas complexos e gestão de redes sociais. A DevSpark foi fundada por dois jovens denominados Ussemo Escórcio e Santos Malembe com o propósito de resolver a falta de visibilidade digital de diversas empresas no mercado angolano.    
        </p>
      </section>
      
      <section class="area_cards">
        <div class="cabeca_info">
          <h2>Nossos Princípios</h2>
          <p>A base que orienta as nossas decisões e o compromisso com o futuro</p>
        </div>
            <div class="card_container">
                <div class="card">
                 <div class="imagem"><img src="build/assets/img/icon/missao.png" alt="missão">
                </div>   
                 <h2>Missão</h2>
                 <p>Mover o mercado angolano para o mundo digital, contribuindo com a criação de websites para melhor visibilidade de empresas e trabalhadores freelancer no mercado angolano.</p>
                </div>
    
                <div class="card">
                 <div class="imagem"><img src="build/assets/img/icon/visao.png" alt="visao">
                </div>   
                 <h2>Visão</h2>
                 <p>A DevSpark observa o seu futuro com grandes espectativas, sendo referência nacional no sector tecnológico em diversas áreas de aplicação da TI, contribuindo não só no sector tecnológico mas também no económico angolano.</p>
                </div>

                <div class="card">
                 <div class="imagem"><img src="build/assets/img/icon/valores.png" alt="valores">
                </div>   
                 <h2>Valores</h2>
                 <p>Inovação, compromisso, qualidade, transparência e foco no cliente, desenvolvendo soluções tecnológicas que geram valor e impulsionam a transformação digital em Angola.</p>
                </div>
            </div>
        </section>

        <section class="area_valores">
          <div class="cabeca_info">
            <h2>Nossos Resultados</h2>
            <p>Números que refletem nossa experiência e comprimisso com cada projecto</p>
          </div>
          <div class="valores_container">
            <div class="valores">
              <div class="imagem">
                <img src="build/assets/img/icon/projecto.png" alt="projectos">
              </div>
              <div class="info">
                <h2>+10</h2>
                <span>Projectos concluídos</span>
              </div>
            </div>
            <div class="valores">
              <div class="imagem">
                <img src="build/assets/img/icon/cliente.png" alt="clientes">
              </div>
              <div class="info">
                <h2>+5</h2>
                <span>Clientes satisfeitos</span>
              </div>
            </div>
            <div class="valores">
              <div class="imagem">
                <img src="build/assets/img/icon/experiencia.png" alt="experiência">
              </div>
              <div class="info">
                <h2>-1ano</h2>
                <span>Experiência</span>
              </div>
            </div>
            <div class="valores">
              <div class="imagem">
                <img src="build/assets/img/icon/suporte.png" alt="suporte">
              </div>
              <div class="info">
                <h2>24/7</h2>
                <span>Suporte</span>
              </div>
            </div>
          </div>
        </section>

        
<section class="portfolio-section" id="portfolio">
  <div class="portfolio-container">

    <div class="portfolio-header">
      <h2>Nossos Projectos</h2>
      <p>Clique em "Visualizar" para ver todas as imagens de cada projeto ou baixe as imagens dos projectos todos clicando no botão abaixo</p>
  <a href="{{ asset('build/assets/Arquivos_baixar/portofolio_DevSpark.zip') }}" download class="btn-download">Baixar Portfólio.ZIP</a>
    </div>

    <div class="portfolio-grid">

      <!-- PROJETO 1 -->
      <div class="portfolio-item">
        <img src="{{ asset ('build/assets/arquivos_baixar/lading_page/hero.png') }}" alt="Landing Page">
        <div class="portfolio-overlay">
          <h3>Landing Page</h3>
          <button class="btn-view"
            data-imgs="build/assets/arquivos_baixar/lading_page/hero.png,build/assets/arquivos_baixar/lading_page/menu.png,build/assets/arquivos_baixar/lading_page/servicos.png,build/assets/arquivos_baixar/lading_page/reserva.png,build/assets/arquivos_baixar/lading_page/sobre.png,build/assets/arquivos_baixar/lading_page/info_restaurante.png">
            Visualizar 6 fotos
          </button>
        </div>
      </div>

      <!-- PROJETO 2 -->
      <div class="portfolio-item">
       <img src="{{ asset ('build/assets/arquivos_baixar/MyEliada/home_MyEliada.jpg') }}" alt="Rede social academica">
        <div class="portfolio-overlay">
          <h3>Rede Sócial Academica - MyEliada</h3>
          <button class="btn-view"
            data-imgs="build/assets/arquivos_baixar/MyEliada/home_MyEliada.jpg,build/assets/arquivos_baixar/MyEliada/login_MyEliada.png,build/assets/arquivos_baixar/MyEliada/activacao_MyEliada.png,build/assets/arquivos_baixar/MyEliada/perfil_MyEliada.png,build/assets/arquivos_baixar/MyEliada/biblioteca_MyEliada.png,build/assets/arquivos_baixar/MyEliada/evento_MyEliada.png,build/assets/arquivos_baixar/MyEliada/mensagem_MyEliada.png">
            Visualizar 7 fotos
          </button>
        </div>
      </div>

            <!--Projecto 3-->
      <div class="portfolio-item">
        <img src="{{ asset('build/assets/arquivos_baixar/Site_institucional/home.jpg') }}" alt="Site Ecommerce">
        <div class="portfolio-overlay">
          <h3>Site Institucional</h3>
          <button class="btn-view"
            data-imgs="build/assets/arquivos_baixar/Site_institucional/home.jpg,build/assets/arquivos_baixar/Site_institucional/mini_sobre.jpg,build/assets/arquivos_baixar/Site_institucional/servicos.jpg,build/assets/arquivos_baixar/Site_institucional/produtos_recomendados.jpg,build/assets/arquivos_baixar/Site_institucional/contacto.jpg,build/assets/arquivos_baixar/Site_institucional/produtos.jpg,build/assets/arquivos_baixar/Site_institucional/info_sobre.jpg,build/assets/arquivos_baixar/Site_institucional/sobre.jpg">
            Visualizar 8 fotos
          </button>
        </div>
      </div>

      <!-- PROJETO 4-->
      <div class="portfolio-item">
        <img src="{{ asset('build/assets/arquivos_baixar/Gestor_stock/actividades.jpg') }}" alt="Site Ecommerce">
        <div class="portfolio-overlay">
          <h3>Gestor de Stock</h3>
          <button class="btn-view"
            data-imgs="build/assets/arquivos_baixar/Gestor_stock/login.jpg,build/assets/arquivos_baixar/Gestor_stock/cadastro.jpg,build/assets/arquivos_baixar/Gestor_stock/actividades.jpg,build/assets/arquivos_baixar/Gestor_stock/notificacoes.jpg,build/assets/arquivos_baixar/Gestor_stock/cadastro_produto.jpg,build/assets/arquivos_baixar/Gestor_stock/produto.jpg,build/assets/arquivos_baixar/Gestor_stock/historico.jpg,build/assets/arquivos_baixar/Gestor_stock/total.jpg,build/assets/arquivos_baixar/Gestor_stock/gastos.jpg">
            Visualizar 9 fotos
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" class="lightbox">
  <span class="lightbox-close">&times;</span>
  <button class="lightbox-prev">&#10094;</button>
  <img class="lightbox-content" id="lightbox-img">
  <button class="lightbox-next">&#10095;</button>
  <div class="lightbox-counter" id="lightbox-counter">1 / 4</div>
</div>

        <div class="fale_conosco">
          <div class="imagem">
            <div class="icone_enviar">
              <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
              </svg>
            </div>
            <div class="info">
                <h4>Pronto para iniciar o seu projecto?</h4>
                <p>Vamos transformar a sua ideia em um projecto de sucesso</p>
            </div>
            <div class="contactar">
              <button><a href="https://wa.me/244925134068">Fale Conosco</a></button>
            </div>
          </div>

        </div>
    </main>

      <footer id="contactar">

      <div class="cabeca_img">
          <img src="build/assets/img/icon/logo100.png" alt="logotipo">
      </div>

      <div class="redes_socias">
        <div class="titulo">
          <h3>Redes sócias</h3>
        </div>
        <div class="icones">
          <a href="https://wa.me/244925134068"><img src="build/assets/img/icon/whatsapp.png" alt="whatsApp"></a>
          <a href="https://www.instagram.com/devspark_development?igsh=MWhvMTJjbzNqZ2NsdQ=="><img src="build/assets/img/icon/instagram.png" alt="instagram"></a>
        </div>
      </div>

      <div class="links">
        <h3>Links Rápidos</h3>
          <a href="index.html">Página inicial</a>
          <a href="#servicos">Serviços</a>
          <a href="#pacotes">Pacotes</a>
          <a href="#contactar">Contactos</a>
          <a href="sobre.html">Sobre-Nós</a>
      </div>

      <div class="contactos">
        <h3>Contactos</h3>
        <div class="email">
          <a href="mailto:devspark.contacts@gmail.com">
            <img src="build/assets/img/icon/email.png" alt="email">
            devspark.contacts@gmail.com
          </a>
        </div>
        <div class="localizacao">
          <a href="tel:+244925134068">
            <img src="build/assets/img/icon/telefone.png" alt="numero">
            +244 925 134 068
          </a>
        </div>
      </div>
      <div class="final">

        <p>@2026 DevSpark. Todos os direitos reservados</p>
      </div>
  </footer>


    <script src="build/assets/js/portofolio.js"></script>
    <script src="build/assets/js/index.js"></script>
    
</body>
</html>