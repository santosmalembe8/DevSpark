<!doctype html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DevSpark</title>
  <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}" />
</head>

<body>
  <header class="cabecalho"> <!--Inico do cabeçalho-->
    <div class="logotipo">
      <a href="index.html"><img src="{{ asset('build/assets/img/icon/logo.png')}}" alt="logo_DevSpark" /></a>
    </div>

    <nav class="nav_bar"><!--Inicio da nav_bar-->
      <ul class="nav_lista">
        <li><a href="{{route('index')}}">Página inicial</a></li> 
        <li> <a href="{{route('index')}}#servicos">Serviços</a></li>
        <li><a href="{{route('index')}}#pacotes">Pacotes</a></li> 
        <li><a href="{{route('index')}}#contactar">Contactos</a></li>
        <li><a href="{{route('sobre')}}">Sobre-Nós</a></li>
      </ul>
    </nav><!--Fim da nav_bar-->

    <div class="botao_menu">
      <button class="menu">
        <img class="abrir" src="{{ asset('build/assets/img/icon/menu.png') }}" alt="mneu_mobile" />
        <img class="fechar" src="{{ asset('build/assets/img/icon/fechar.png') }}" alt="mneu_mobile" />
      </button>
    </div>
  </header><!--Fim do cabeçalho-->

  <!--Botões flutuantes-->
  <div class="flutuante">
    <a href="{{route('spark')}}"><img src="{{ asset('build/assets/img/icon/spark.png') }}" alt="chatboot da empresa"></a>
    <a href="https://wa.me/244925134068"><img src="{{ asset('build/assets/img/icon/whatzaap_botao.png') }}" alt="ir para o whatsapp da empresa"></a>
  </div>

  <main class="conteudo_principal"><!--Conteudo principal-->
    <section id="boas_vindas"><!--primeira sessão da página incial-->
      <div class="overlay"></div><!--Conteudo que fica por cima-->
      <div class="conteudo">
        <div class="info">
          <h1>
            Transforme ideias em
            <span>soluções digitais</span>
          </h1>
          <p>Criamos soluções tecnológicas inovadoras para acelerar o crescimento do seu negócio etransformar ideias em resultados reais. </p>
        </div><!--Fim da div info-->

        <div class="contactos">
          <button class="pacotes"><a href="#pacotes" class="btn btn-primary">Pacotes</a></button>
          <button class="orcamento"><a href="https://wa.me/244925134068?text=Olá,%20DevSpark.%0A%20Pretendo%20solicitar%20um%20orçamento,%20poderiam%20ajudar-me%20a%20obter%20um%20consoante%20as%20minhas%20necessidades?" target="_blank">Pedir orçamento</a></button>
        </div>
      </div>
    </section><!--Fim da sessão de boas vindas-->

    <section class="intro"> <!--Segunda sessão-->
      <h2 class="reveal">Mais que código <span>entregamos soluções</span>.</h2>
      <p class="reveal">Na DevSpark criamos soluções digitais que se adaptam às suas necessidades, impulsionam negócios e fortalecem marcas. Transformamos ideias em experiências modernas, funcionais e pensadas para gerar resultados</p>
      <p class="reveal">Com criatividade, estratégia e tecnologia, entregamos soluções eficientes que acompanham o crescimento do seuprojecto</p>

      <div class="saber">
        <button><a href="{{route('sobre')}}">Saber Mais</a></button>
      </div>
    </section><!--Fim da sessão do intro-->

    <section id="servicos"><!--Incio da sessão dos serviços-->
      <h1>NOSSOS SERVIÇOS</h1>
      <div class="card_container"><!--Controlador dos cards-->
        <div class="card reveal-left"><!--card que vem da esquerda-->
          <div class="imagem">
            <img src="{{ asset('build/assets/img/icon/website.png') }}" alt="desenvolvimento de site">
          </div>
          <div class="info">
            <h2>Desenvolvimento web</h2>
            <p>Criação de websites que se adaptam a diferentes telas com cores, design moderno, e um layout chamativo e
              interativo, functionalities personalizadas de acordo a sua necessidade</p>
          </div>
        </div><!--Fim do primeiro card-->

        <div class="card reveal-right"><!--card que vem da direita-->
          <div class="imagem">
            <img src="{{ asset('build/assets/img/icon/appweb.png') }}" alt="desenvolvimento de site">
          </div>
          <div class="info">
            <h2>Aplicações web</h2>
            <p>Criação de um aplicativo web com diversas funcionalidades como mercado online, sistemas de gestão e
              vários outros tipos de sistemas complexos e interativos</p>
          </div>
        </div><!--Fim do segundo card-->
        
        <div class="card reveal-left"><!--segunda card que vem da esquerda-->
          <div class="imagem">
            <img src="{{ asset('build/assets/img/icon/otimizacao.png') }}" alt="desenvolvimento de site">
          </div>
          <div class="info">
            <h2>Melhorias de websites</h2>
            <p>Análise e melhoria do design, fluxo de dados de websites já publicados, otimizar a experiência do
              usuário, melhorar a navegação e aumentar a performance do site</p>
          </div>
        </div><!--Fim do terceiro card-->

        <div class="card reveal-left"><!--Último card-->
          <div class="imagem">
            <img src="{{ asset('build/assets/img/icon/gestao.png') }}" alt="desenvolvimento de site">
          </div>
          <div class="info">
            <h2>Aplicações Desktop</h2>
            <p>Desenvolvemos aplicações desktop personalizadas para automatizar processos e melhorar a produtividade e facilitar a gestão do seu negócio</p>
          </div>
        </div><!--Fim do último card-->
      </div><!--Fim do card_container-->
    </section><!--Fim da sessão dos serviços-->

    <section id="pacotes"><!--Inico da sessão dos pacotes-->
      <div class="cabeca_pacote">
        <h2>NOSSOS PACOTES</h2>
      </div>
      <div class="card_container"><!--Controlador dos card com os pacotes-->
        <div class="card_pacote"><!--Primeiro card-->
          <div class="info_pacotes">
            <h3>Pacote Básico</h3>
            <strong>100.000 kz - Inicial</strong>
            <p><span class="info">&#10003</span> Landing page (Uma página)</p>
            <p><span class="info">&#10003</span> Design Responsivo</p>
            <p><span class="info">&#10003</span> Formulário de Contacto</p>
            <p><span class="info">&#10003</span>Integração com WhatsApp</p>
          </div>
          <div class="botao"><!--Botão-->
            <button><a href="https://wa.me/244925134068?text=Olá%20DevSpark,%20pretendo%20criar%20com%20vocês%20um%20site%20usando%20o%20Pacote%20básico.%0A%20Qual%20é%20o%20próximo%20passo?">Escolher este Pacote</a></button>
          </div>
        </div><!--Fim do primeiro card-->

        <div class="card_pacote" id="card2"><!--Segundo card-->
          <div class="info_pacotes">
            <h3>Pacote Spark</h3>
            <strong>250.000 kz - Inicial</strong>
            <p><span class="info">&#10003</span> 2-4 páginas</p>
            <p><span class="info">&#10003</span> Design Responsivo</p>
            <p><span class="info">&#10003</span>Visualização e ecomenda de produtos e resrevas</p>
            <p><span class="info">&#10003</span>Painel administrativo</p>
            <p><span class="info">&#10003</span>Modos visuais ( escuro e claro)</p>
          </div>
          <div class="popular">
            <h4>POPULAR</h4>
          </div>
          <div class="botao">
            <button><a href="https://wa.me/244925134068?text=Olá%20DevSpark,%20pretendo%20criar%20com%20vocês%20um%20site%20usando%20o%20Pacote%20Spark.%0A%20Qual%20é%20o%20próximo%20passo?">Escolher este Pacote</a></button>
          </div>
        </div><!--Fim do segundo card-->

        <div class="card_pacote card2" id="card3"><!--Terceiro card-->
          <div class="info_pacotes">
            <h3>Pacote Premium</h3>
            <strong>500.000 Kz - Inicial</strong>
            <p><span class="info">&#10003</span>+ 5 páginas</p>
            <p><span class="info">&#10003</span> Design Responsivo</p>
            <p><span class="info">&#10003</span> Sistema complexo como ERP</p>
            <p><span class="info">&#10003</span>Opção de pagamnento via website</p>
            <p><span class="info">&#10003</span>Niveis de acessos escaláveis (permissões)</p>
            <p><span class="info">&#10003</span>Implementação de conteúdos dinámicos</p>
            <p><span class="info">&#10003</span>Modos visuais (Escuro e claro)</p>
          </div>
          <div class="popular">
            <h4>POPULAR</h4>
          </div>
          <div class="botao">
            <button><a href="https://wa.me/244925134068?text=Olá%20DevSpark,%20pretendo%20criar%20com%20vocês%20um%20site%20usando%20o%20Pacote%20Premium.%0A%20Qual%20é%20o%20próximo%20passo?">Escolher este Pacote</a></button>
          </div>
        </div><!--Fim do terceiro card-->
      </div><!--Fim do card_container-->
    </section><!--Fim dasessão dos pacotes-->

    <section class="spark">
      <div class="info">
        <h2>Converse com o Spark</h2>
        <p>Converse com o nosso assistente virtual e tire todas suas dúvidas ou entre em contacto diretamente conosco
          apartir do whatsApp ou apartir do formulário abaixo</p>
      </div>
      <div class="iniciar_conversa">
        <button><a href="{{route('spark')}}">Iniciar Spark</a></button>
      </div>
    </section>

    
    <div class="divisor"><!--Linha divisória entre o spark e oformulário-->
      <span class="icone">
          <img src="{{ asset('build/assets/img/icon/for.png') }}" alt="Chat">
      </span>
     </div><!--Fim da linha divisória-->

     
  <!--Formulário na página inicial-->
    <section class="sugestao">
     
        <div class="cabeca_sugestao">
          <h2>INFORME-NOS</h2>
        </div> 
        
        <form action="https://formsubmit.co/devspark.contacts@gmail.com" method="POST">
        @csrf
        <div class="input_container">
          <input class="seunome" type="text" name="nome" required placeholder="Seu nome">
        </div>
        <div class="input_container">
          <input type="text" name="email" required placeholder="Seu email">
        </div>
        <div class="input_container">
          <input type="tel" name="telefone" required placeholder="Seu número de telemóvel">
        </div>
        <div class="input_container">
          <input type="text" name="assunto" required placeholder="Assunto">
        </div>
        <div class="input_container">
          <textarea required name="mensagem" placeholder="Mensagem"></textarea>
        </div>
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_next" value="http://127.0.0.1:8000/thanks">
        <div class="botao">
          <button type="submit">Enviar Mensagem</button>
        </div>
      </form>
    </section><!--Fim da sssão que consta o formulário-->
  </main><!--Fim do conteúdo_principal-->

  <footer id="contactar"><!--Incio do footer-->
      <div class="cabeca_img">
          <img src="{{ asset('build/assets/img/icon/logo100.png') }}" alt="logotipo">
      </div>

      <div class="redes_socias">
        <div class="titulo">
          <h3>Redes sócias</h3>
        </div>
        <div class="icones">
          <a href="https://wa.me/244925134068"><img src="{{ asset('build/assets/img/icon/whatsapp.png') }}" alt="whatsApp"></a>
          <a href="https://www.instagram.com/devspark_development?igsh=MWhvMTJjbzNqZ2NsdQ=="><img src="{{ asset('build/assets/img/icon/instagram.png') }}" alt="instagram"></a>
        </div>
      </div>

      <div class="links">
        <h3>Links Rápidos</h3>
          <a href="{{route('index')}}">Página inicial</a>
          <a href="{{route('index')}}#servicos">Serviços</a>
          <a href="{{route('index')}}#pacotes">Pacotes</a>
          <a href="{{route('index')}}#contactar">Contactos</a>
          <a href="{{route('sobre')}}">Sobre-Nós</a>
      </div>

      <div class="contactos">
        <h3>Contactos</h3>
        <div class="email">
          <a href="mailto:devspark.contacts@gmail.com">
            <img src="{{ asset('build/assets/img/icon/email.png') }}" alt="email">
            devspark.contacts@gmail.com
          </a>
        </div>
        <div class="localizacao">
          <a href="tel:+244925134068">
            <img src="{{ asset('build/assets/img/icon/telefone.png') }}" alt="numero">
            +244 925 134 068
          </a>
        </div>
      </div>
      <div class="final">
        <p>@2026 DevSpark. Todos os direitos reservados</p>
      </div>
  </footer><!--Fim do footer-->

  <script src="{{ asset('build/assets/js/index.js') }}"></script>
  <script src="{{ asset('build/assets/js/animacao_card.js') }}"></script>
  <script src="{{ asset('build/assets/js/texto_animacao.js') }}"></script>
  <script src="{{ asset('build/assets/js/botao_what.js') }}"></script>
  
</body>
</html>