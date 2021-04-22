<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!--FAVICON-->
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!--MATERALIZE-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Centro Boa Forma - Seu espaço de saúde</title>
</head>

<body>
  <!--HEADER-->
  <header class="home scrollspy">
    <!--MENU MOILE-->
    <ul class="sidenav" id="menu-mobile">
      <li><a class="sidenav-close" href="#home">Home</a></li>
      <li><a class="sidenav-close" href="#sobre">Sobre o Boa Formato</a></li>
      <li><a class="sidenav-close" href="#services">Serviços</a></li>
      <li><a class="sidenav-close" href="#unidades">Unidades</a></li>
      <li><a class="sidenav-close" href="#contato">Contato</a></li>
    </ul>
    <div class="navbar-fixed">
      <nav class="navbar z-depth-0">
        <div class="nav-wrapper container">
          <h1 class="logo_text">Centro Boa Forma - Seu espaço de saúde</h1>
          <a href=""><img class="logo_img" src="../img/logo.png" alt="Centro Boa Forma"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre o Boa forma</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#unidades">Unidades</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>

          <a href=" #" data-target="menu-mobile" class="sidenav-trigger right "><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
  </header>

  <!-- HOME-->
  <section class="home block scrollspy" id="home">
    <div class=" row container banner">
      <div class="col s12 center">
        <h2 class="white-text">O melhor treinamento funcional da região</h2>
        <p class="white-text">Um novo conceito em prevenção, promoção e reailitação da saúde para quem busca melhorar do condicionamento e emagrecimento, além de ser divertido e desafiador. Quer experimentar?</p>
        <div class="row">
          <a href="#sobre" class=" btn btn-large btn-color">Sobre nós</a>
          <a href="#contato" class="btn btn-large white black-text">Contato</a>
        </div>
      </div>
    </div>
  </section>
  <!--SOBRE-->
  <!--Arrumar o container o padding-->
  <section class="about block" id="sobre">
    <div class="row container">
      <div class="col s12 center">
        <h2 class="ligth title">Sobre nós</h2>
      </div>
      <div class="col s12 l6 ">
        <p>O Centro Boa Forma chegou a Itabuna e região trazendo um novo conceito em prevenção, promoção e reabilitação da saúde. 
          Localizada no centro da cidade, conta com fácil estacionamento, salas amplas e climatizazdas, ambiente confortável e seguro aos seus usuários. Suas instalações foram projetas e equiapdas sob mediada, dentro dos padrões dee acessibilidade, para acolher principalemnte pessoas com limitações funcionais. O centro dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por tratamentos individualizados e baseados em evidências cientificas.
        </p>
      </div>
      <div class="col s12 l6">
        <div class="carousel img-carousel carousel-slider">
          <a href="#" class="carousel-item">
            <img src="../img/banner-01.jpg" alt="Imagem institucional">
          </a>
          <a href="#" class="carousel-item">
            <img src="../img/banner-02.jpg" alt="Imagem institucional">
          </a>
          <a href="#" class="carousel-item">
            <img src="../img/banner-03.jpg" alt="Imagem institucional">
          </a>
        </div>
      </div>
    </div>
    <!--Missão, visão e valores-->
    <div class="row missao-visao-valores">
      <div class="container">
        <!--Arrumar o container o padding-->
        <!--Arrumar o alinhamento dos paragrafos-->
        <article class="item col s12 m4 center">
          <span class="icon"><i class="material-icons medium ">directions_run</i></span>
          <h3 class="ligth">Missão</h3>
          <p class="ligth">Promover a saúde e bem-estar dos clientes com ações de prevenção, promoção e reabilitação,através de tratamentos eficazes e humanizados em Fisioterapia e suas vertentes.</p>
        </article>
        <article class="item col s12 m4 center">
          <span class="icon"><i class="material-icons   medium">visibility</i></span>
          <h3 class="ligth">Visão</h3>
          <p class="ligth">Tornar-se referência no cenário estadual, buscando a excelência dos serviços prestados, além de promover o desenvolvimento técnico-científico de sua equipe e da sociedade</p>
        </article>
        <article class="item col s12 m4 center">
          <span class="icon"><i class="material-icons medium">grade</i></span>
          <h3 class="ligth">Valores</h3>
          <p class="ligth">• Agir com ética frente aos clientes e colaboradores.<br>
            • Tornar o ambiente de trabalho o mais familiar possível.<br>
            • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.</p>
        </article>
      </div>
    </div>
  </section>
  <!-- SERVICOS-->
  <section class="services block scrollspy" id="services">
    <div class="row container">
      <div class="col s12 center">
        <h2 class="ligth title white-text">Serviços</h2>
        <p class="ligth paragraph white-text"> Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações funcionais. A clínica dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por tratamentos individualizados e baseados em evidências científicas.</p>
        </p>
      </div>
      <!--PILATES-->
      <div class="row container">
        <article class="col s12 m6 l3">
          <div class="card">
            <div class="card-image">
              <img src="../img/pilates.jpg" alt="Pilates" class="materialboxed" />
              <a href="#pilates-modal" class="btn btn-floating halfway-fab modal-trigger btn-color"><i class="material-icons">more_horiz</i></a>
            </div>
            <div class="card-content">
              <h3 class="card-title">Pilates</h3>
              <p class="ligth" style="color: #2f2f22;">Pilates é um método de controle muscular desenvolvido por Joseph Pilates... </p>
            </div>
        </article>
        <!--PILATES MODAL-->
        <div class="modal " id="pilates-modal">
          <div class="modal-content">
            <h5 class="ligth">O que é Pilates</h5>
            <p class="ligth">
              O Pilates é um método de exercício físico e alongamento que utiliza o peso do próprio corpo na sua execução. É uma técnica de reeducação do movimento que visa trabalhar o corpo todo, trazendo equilíbrio muscular e mental.
            </p>
            <h5 class="ligth">Quais os benefícios do Pilates? </h5>
            <ul class="collection">
              <li class="collection-item">Alongar, tonificar e definir a musculatura sem exageros;
              </li>
              <li class="collection-item">Melhorar a postura;</li>
              <li class="collection-item">Tonificar a musculatura profunda do abdômen;</li>
              <li class="collection-item">Prevenir e recuperar lesões;</li>
              <li class="collection-item">Reduzir o “stress” e aliviar as tensões;</li>
              <li class="collection-item">Deixar sua coluna mais forte e flexível;</li>
              <li class="collection-item">Melhorar a área de movimento das articulações;
              </li>
              <li class="collection-item">Melhora a circulação sanguínea;
              </li>
              <li class="collection-item">Aumentar a coordenação e o equilíbrio;
              </li>
              <li class="collection-item">Corrigir sobrecargas e alinhar os músculos;
              </li>
              <li class="collection-item">Melhorar a mobilidade e a agilidade;
              </li>
              <li class="collection-item">Complementar o seu treino esportivo;
              </li>
              <li class="collection-item">Melhorar o visual de seu corpo e a sua auto-estima.
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <a class="btn modal-action modal-close btn-color">Sair</a>
          </div>
        </div>
        <!--NUTRICAO-->
        <article>
          <div class="col s12 m6 l3 ">
            <div class="card">
              <div class="card-image">
                <img src="../img/nutricao.jpg" alt="Nutrição" class="materialboxed">
                <a href="#nutricao-modal" class="btn btn-floating halfway-fab modal-trigger">
                  <i class="material-icons btn-color">more_horiz</i>
                </a>
              </div>
              <div class="card-content">
                <h3 class="card-title">Nutrição</h3>
                <p class="ligth" style="color: #2f2f22">Ele planeja, administra e coordena programas de alimentação e nutrição em empresas, escolas... </p>
              </div>
            </div>
          </div>
        </article>
        <!--NUTRICAO MODAL-->
        <div class="modal" id="nutricao-modal">
          <div class="modal-content">
            <h5 class="ligth">Qual a importância da nutrição?
            </h5>
            <p class="ligth">Seja por um estilo de vida saudável ou para eliminar peso, a preocupação com os alimentos é constante na rotina das pessoas. Por isso é importante saber comer e dar relevância ao que se come. Uma nutrição adequada pode prevenir doenças e tornar a vida mais saudável.
            </p>
          </div>
          <div class="modal-footer">
            <a class="btn modal-action modal-close btn-color">Sair</a>
          </div>
        </div>
        <!-- FISIOTERAPIA-->
        <article>
          <div class="col s12 m6 l3 ">
            <div class="card">
              <div class="card-image">
                <img src="../img/fisioterapia.jpg" alt="Fisioterapia" class="materialboxed">
                <a href="#fisioterapia-modal" class="btn btn-floating halfway-fab modal-trigger">
                  <i class="material-icons btn-color">more_horiz</i>
                </a>
              </div>
              <div class="card-content">
                <h3 class="card-title">Fisioterapia</h3>
                <p class="ligth" style="color: #2f2f22">O fisioterapeuta trata e previne doenças e lesões, empregando técnicas ...
                </p>
              </div>
            </div>
          </div>
        </article>
        <!--FUNCIONAL-->
        <article>
          <div class="col s12 m6 l3 ">
            <div class="card">
              <div class="card-image">
                <img src="../img/funcional.jpg" alt="Funcional" class="materialboxed">
                <a href="#funcional-modal" class="btn btn-floating halfway-fab modal-trigger">
                  <i class="material-icons btn-color">more_horiz</i>
                </a>
              </div>
              <div class="card-content">
                <h3 class="card-title">Funcional</h3>
                <p class="ligth" style="color: #2f2f22">O treinamento funcional é um método de trabalho ainda mais dinâmico...</p>
              </div>
            </div>
          </div>
        </article>
        <!--BOTÃO QUADRO DO HORARIOS-->
        <div class="row right">
          <a href="#horarios-modal" class="btn btn-large btn-color modal-trigger"><i class="material-icons right">timer</i> Quadro de horários </a>
        </div>
        <!--MODAL QUADRO DE HORARIOS-->
        <div class="modal" id="horarios-modal">
          <div class="modal-content ">
            <h5 class="ligth">Quadro de Horarios</h5>
            <ul class="tabs">
              <li class="tab col s3"><a href="#table-pilates">Pilates</a></li>
              <li class="tab col s3"><a href="#table-nutricao">Nutrição</a></li>
              <li class="tab col s3"><a href="#table-fisioterapia">Fisioterapia</a></li>
              <li class="tab col s3"><a href="#table-funcional">Funcional</a></li>
            </ul>
            <!--TABELA PILATES-->
            <table class="striped responsive-table" id="table-pilates">
              <thead>
                <tr>
                  <th></th>
                  <th>Segunda</th>
                  <th>Terça</th>
                  <th>Quarta</th>
                  <th>Quinta</th>
                  <th>Sexta</th>
                  <th>Sábado</th>
                  <th>Domingo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>6:00 às 22:00</td>
                  <td>Pilates</td>
                  <td></td>
                  <td>Pilates</td>
                  <td></td>
                  <td>Pilates</td>
                  <td>Pilates</td>
                  <td></td>
                </tr>
                <tr>
                  <td>12:00 às 22:00</td>
                  <td></td>
                  <td>Pilates</td>
                  <td></td>
                  <td>Pilates</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <!--TABELA NUTRICAO-->
            <table class="striped responsive-table" id="table-nutricao">
              <thead>
                <tr>
                  <th></th>
                  <th>Segunda</th>
                  <th>Terça</th>
                  <th>Quarta</th>
                  <th>Quinta</th>
                  <th>Sexta</th>
                  <th>Sábado</th>
                  <th>Domingo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>6:00 às 22:00</td>
                  <td>Nutrição</td>
                  <td>Nutrição</td>
                  <td></td>
                  <td>Nutrição</td>
                  <td></td>
                  <td>Nutrição</td>
                  <td></td>
                </tr>
                <tr>
                  <td>12:00 às 22:00</td>
                  <td></td>
                  <td></td>
                  <td>Nutrição</td>
                  <td></td>
                  <td>Nutrição</td>
                  <td>Nutrição</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <!--TABELA FISIOTERAPIA-->
            <table class="striped responsive-table" id="table-fisioterapia">
              <thead>
                <tr>
                  <th></th>
                  <th>Segunda</th>
                  <th>Terça</th>
                  <th>Quarta</th>
                  <th>Quinta</th>
                  <th>Sexta</th>
                  <th>Sábado</th>
                  <th>Domingo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>6:00 às 12:00</td>
                  <td></td>
                  <td>Fisioterapia</td>
                  <td>Fisioterapia</td>
                  <td></td>
                  <td>Fisioterapia</td>
                  <td>Fisioterapia</td>
                  <td></td>
                </tr>
                <tr>
                  <td>12:00 às 22:00</td>
                  <td>Fisioterapia</td>
                  <td>Fisioterapia</td>
                  <td></td>
                  <td>Fisioterapia</td>
                  <td>Fisioterapia</td>
                  <td>Fisioterapia</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <!--TABELA PILATES-->
            <table class="striped responsive-table" id="table-funcional">
              <thead>
                <tr>
                  <th></th>
                  <th>Segunda</th>
                  <th>Terça</th>
                  <th>Quarta</th>
                  <th>Quinta</th>
                  <th>Sexta</th>
                  <th>Sábado</th>
                  <th>Domingo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>6:00 às 22:00</td>
                  <td>Funcional</td>
                  <td>Funcional</td>
                  <td>Pilates</td>
                  <td></td>
                  <td>Funcional</td>
                  <td>Funcional</td>
                  <td></td>
                </tr>
                <tr>
                  <td>12:00 às 22:00</td>
                  <td></td>
                  <td>Funcional</td>
                  <td></td>
                  <td>Funcional</td>
                  <td></td>
                  <td>Funcional</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <a class="btn modal-action modal-close btn-color">Registrar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--UNIDADES-->
  <section class="unidades block scrollspy" id="unidades">
    <div class="row container">
      <div class="col s12 center">
        <h2 class="ligth title white-text">UNIDADES</h2>
        <p class="ligth paragraph white-text">Para oferecer serviços de acordo com a realidade e necessidade de cada região do Brasil, o centro boa forma possui unidades em quatro estados. Com atividades permanentes os espaços físicos buscam oferecer facilidade de acesso e atendimento de qualidade.</p>
      </div>
    </div>

    <div class="row container">
      <!--BH-->
      <article class="col s12 l6">
        <div class="card horizontal">
          <div class="card-image card-image-horizontal">
            <img src="../img/bh.jpg" alt="Unidade Belo Horizonte">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h3 class="card-title ligth">Belo Horizonte</h3>
              <p class="ligth">
                <i class="material-icons">call</i> 123 321 123 <br>
                <i class="material-icons">email</i> bh@boaforma.com <br>
                <i class="material-icons">location_on</i> Av. Belo Horizonte, 123
              </p>
            </div>
          </div>
        </div>
      </article>

      <!--SALVADOR-->
      <article class="col s12 l6">
        <div class="card horizontal">
          <div class="card-image card-image-horizontal">
            <img src="../img/salvador.jpg" alt="Unidade Salvador">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h3 class="card-title ligth">Salvador</h3>
              <p class="ligth">
                <i class="material-icons">call</i> 123 321 123 <br>
                <i class="material-icons">email</i> salvaldor@boaforma.com
                <br>
                <i class="material-icons">location_on</i> Av. Bahia, 123
              </p>
            </div>
          </div>
        </div>
      </article>
      <!--SAO PAULO-->
      <article class="col s12 l6">
        <div class="card horizontal">
          <div class="card-image card-image-horizontal">
            <img src="../img/sp.jpg" alt="Unidade São Paulo">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h3 class="card-title ligth">São Paulo</h3>
              <p class="ligth">
                <i class="material-icons">call</i> 123 321 123 <br>
                <i class="material-icons">email</i> saopaulo@boaforma.com
                <br>
                <i class="material-icons">location_on</i> Av. São Paulo, 123
              </p>
            </div>
          </div>
        </div>
      </article>

      <!--RIO DE JANEIRO-->
      <article class="col s12 l6">
        <div class="card horizontal">
          <div class="card-image card-image-horizontal">
            <img src="../img/rj.jpg" alt="Unidade Rio de Janeiro">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h3 class="card-title ligth">Rio de Janeiro</h3>
              <p class="ligth">
                <i class="material-icons">call</i> 123 321 123 <br>
                <i class="material-icons">email</i> riodejaneiro@boaforma.com
                <br>
                <i class="material-icons">location_on</i> Av. Rio de Janeiro, 123
              </p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="contato bloco scrollspy" id="contato">
    <div class="row container">
      <div class="col s12 center">
        <h2 class="title light black-text"> Contato </h2>
      </div>

      <div class="col s12 m6 l4 hide-on-med-only ">
        <div class="map transparent">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.9703745713323!2d-39.26573268527739!3d-14.770698889694328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x739009ddf8f3277%3A0x10113c57b40aa420!2sNode+Studio+Treinamentos!5e0!3m2!1spt-BR!2sbr!4v1508690488190" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="info white-text">
          <h4> Redes sociais </h4>
          <p class="light"> Fique por dentro das novidades, receba dicas, ou simplesmente mostre ao mundo que você faz parte desse projeto sensacional! </p>
          <a href="#" class="btn-floating blue-logo"><i class="fa fa-facebook"></i></a>
          <a href="#" class="btn-floating blue-logo"><i class="fa fa-google"></i></a>
          <a href="#" class="btn-floating blue-logo"><i class="fa fa-twitter"></i></a>

          <h4> Endereço </h4>
          <p class="light"> Rua paraíso, 123 <br>
            Centro, Itabuna - Ba</p>

          <h4> Contatos </h4>
          <p class="light">
            (73) 123456987 <br>
            (45) 123456789 <br>
            (56) 234567678
          </p>

        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="formulario white black-text">
          <h4> Fale conosco </h4>
          <p class="light"> Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante. </p>

          <form action="enviar-email.php" method="post">

            <div class="input-field">
              <input type="text" name="name" id="name">
              <label for="name">Seu nome</label>
            </div>

            <div class="input-field">
              <input type="email" name="email" id="email">
              <label for="email">Seu email</label>
            </div>

            <div class="input-field">
              <input type="text" name="subject" id="subject">
              <label for="subject">Assunto</label>
            </div>

            <div class="input-field">
              <textarea id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Mensagem</label>
            </div>

            <button class="btn blue-logo" type="submit"> Enviar </button>

          </form>
        </div>
      </div>

    </div>
  </section>


  <!--DEPOIMENTO-->
  <div class="depoimentos btn-color">
    <div class="row container">
      <div class="col s12 center">
        <h2 class="title white-text light">Depoimentos</h2>
      </div>

      <div class="col s12 m4 center">
        <img src="img/depo1.jpg" class="circle responsive-img" alt="Depoimento um">
        <p class="light white-text"> "Conheci o treinamento funcional e a metodologia Centro Boa Forma por indicação de um amigo. Execelentes profissionais e super atenciosos!"</p>
        <h4 class="light white-text">Felipe Souza</h4>
        <p class="white-text">
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
        </p>
      </div>

      <div class="col s12 m4 center">
        <img src="img/depo2.jpg" class="circle responsive-img" alt="Depoimento de Bruno">
        <p class="light white-text"> "Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e os treinamentos foram ótimos!"</p>
        <h4 class="light white-text">Bruno Valério</h4>
        <p class="white-text">
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
        </p>
      </div>

      <div class="col s12 m4 center">
        <img src="img/depo3.jpg" class="circle responsive-img" alt="Depoimento 3">
        <p class="light white-text"> "Treinar com motivação e satisfação pelos resultados obtidos são os motivos que me conquistaram e me mantém no Centro Boa Forma."</p>
        <h4 class="light white-text">Joana Souza</h4>
        <p class="white-text">
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
          <i class="material-icons">star</i>
        </p>
      </div>

    </div>
  </div>
  <!--FOOTER-->
  <footer class="rodape">
    <div class="row container center">
      <img src="../img/logo.png" alt="logo_img">
      <p class="ligth">© Centro Boa Forma 2017 - Todos os direitos reservados</p>
    </div>
  </footer>





  <!--JQUERY-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!--MATERALIZE JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- JAVASCRIPT -->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    //INICIALIZACAO
    $(document).ready(function() {
      //MENU MOBILE
      $(".sidenav").sidenav();
      //LINK INTERNO
      $(".scrollspy").scrollSpy({
        scrollOffset: 0
      });
      //CARROSEL(CAROUSEL)
      $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });
      $('.materialboxed').materialbox();
      //MODAL 
      $('.modal').modal();
      //tabs
      $('ul.tabs').tabs({});

      function autoPlay() {
        $(".carousel").carousel("next");
        setTimeout(autoPlay, 4500)
      }
      autoPlay();
    });
    //ADD NAV-COLOR
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 700) {
        $(".navbar").addClass("nav-color")
      } else {
        $(".navbar").removeClass("nav-color")
      }
    })
  </script>

  <? php
    if (isset($GET['status'])):
        if ($GET['status'] == 'sucesso'):
          echo "<script>Materialize.toast('Enviado com sucesso!',4000);</script>";
    else:
    echo "
    <script>Materialize.toast('Erro ao enviar!', 4000);</script>";
    endif;
</body>

</html>
