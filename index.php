<?php
require_once "admin/classes/conexao.class.php";
require_once "admin/classes/controller.class.php";

$controller = new controller('tab_noticias');
$sql = "SELECT titulo, url FROM tab_noticias WHERE status = 'Ativo' ORDER BY id DESC LIMIT 4";
$dados = $controller->getDados($sql, null, TRUE);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>WLL - Sistemas</title>
    <meta name="keywords" content="Desenvolvimento de sites em São Roque e Região, Sistemas e Banco de dados em São Roque, Tecnologia, Consultorias, Programação, PHP, Java, HTML e SQL" />
    <meta name="description" content="Desenvolvimento de Sistemas, Sites, Consultorias, Banco de Dados em São Roque">
    <meta name="robots" content="ALL" />
    <meta name="author" content="WLL-Sistemas" />
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/ico" href="images/wllicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body id='principal'>
    <div id="responsive-menu">
        <ul class="menu-holder one-page">
            <li class='scroll'><a href="#principal"><i class="fa fa-home"></i>Principal</a></li>
            <li class='scroll'><a href="#services"><i class="fa fa-cogs"></i>Serviços</a></li>
            <li class='scroll'><a href="#sobre"><i class="fa fa-list"></i>Sobre</a></li>
            <li class='scroll'><a href="#noticias"><i class="fa fa-rss"></i>Notícias</a></li>
            <li class='scroll'><a href="#perguntas-resposta"><i class="fa fa-question-circle"></i>FAQ</a></li>
            <li class='scroll'><a href="#contact"><i class="fa fa-envelope"></i>Contato</a></li>
        </ul>
    </div>

    <!-- HEADER -->
    <header class="site-header" >
        <div class="container">
            <div class="row">
                <div class="menu-holder">
                    <div class="col-md-3 col-sm-2 logo">
                        <a href="#" title="WLL - Sistemas" class='logo'>
                            <img src="images/wll-sistemas.png" title="WLL-Sistemas" alt="WLL-Sistemas" height="56" width="251" alt=""><br> Sistemas
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <nav class="main-menu hidden-xs">
                            <ul class='one-page'>
                                <li class='scroll'><a href="#top">PRINCIPAL</a></li>
                                <li class='scroll'><a href="#services">SERVIÇOS</a></li>
                                <li class='scroll'><a href="#sobre">SOBRE</a></li>
                                <li class='scroll'><a href="#noticias">NOTÍCIAS</a></li>
                                <li class='scroll'><a href="#perguntas-resposta">FAQ</a></li>
                                <li class='scroll'><a href="#contact">CONTATO</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="social-top">
                            <li><a target="_blank" href="https://www.facebook.com/pages/WLL-Sistemas-Solu%C3%A7%C3%B5es-em-Tecnologia-da-Informa%C3%A7%C3%A3o/327263654076457?ref=bookmarks"><i class="fa fa-facebook"></i><span class="hidden-xs">Facebook</span></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i><span class="hidden-xs">Youtube</span></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i><span class="hidden-xs">Linkedin</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="text-right visible-xs">
                    <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
                </div>
            </div>
        </div>
    </header> <!-- .site-header -->
    
    
    <!-- TOP CONTENT -->
    <div class="top-c" id='top'>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-lg-5 col-md-5 col-xs-offset-1 col-sm-5 col-xs-8 col-xs-offset-2">
                    <div class="topc-img">
                        <img src="images/linguagens-programacao.png" width="" height="" alt="Desenvolvimento em PHP, Java, C#, SQL" title="Desenvolvimento em PHP, Java, C#, SQL">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="topc-title">Transformando problemas em soluções</h3>
                    <ul>
                        <li>
                            <i class="fa fa-check">
                            </i>Construção de aplicações desktop para comércio em geral.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Construção de WEB Sites e aplicações WEB.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Análise e Otimização de Banco de Dados.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Palestras sobre tecnologias de desenvolvimento.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Desenvolvimento de soluções multiplataforma para Windows e Linux.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Reformulação de Sites com layout responsivo.
                        </li>
                        <li>
                            <i class="fa fa-check">
                            </i>Desenvolvemos integrações para pagamentos on-line e para WebServices.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- SERVICES -->
    <div class="content-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-header">
                    <h1 class="section-title"><i class="fa fa-cogs"></i> Nossos Serviços</h1>
                </div>
            </div><br><br><br>
            <div class="row">
                <div class="col-md-3 col-xs-6 text-center">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-video-camera"></i>
                        </div>
                        <h3 class="service-title">BANCO DE DADOS</h3>
                    </div> <!-- .service-item -->
                </div> <!-- .col-md-3 -->
                <div class="col-md-3 col-xs-6 text-center">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <h3 class="service-title">SISTEMAS DESKTOP</h3>
                    </div> <!-- .service-item -->
                </div> <!-- .col-md-3 -->
                <div class="col-md-3 col-xs-6 text-center">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <h3 class="service-title">SITES</h3>
                    </div> <!-- .service-item -->
                </div> <!-- .col-md-3 -->
                <div class="col-md-3 col-xs-6 text-center">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-support"></i>
                        </div>
                        <h3 class="service-title">PALESTRAS</h3>
                    </div> <!-- .service-item -->
                </div> <!-- .col-md-3 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #services -->

    
    <!-- SOBRE -->
    <div class="content-section" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-header">
                    <h1 class="section-title">Sobre Nossa Empresa</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-5 col-xs-12 text-center">
                        <img src="images/nossa-empresa.png" alt="Nossa Empresa" title="Nossa Empresa">
                    </div>                    
                    <div class="product-content col-md-7 col-xs-12">
                        <h3>Empresa</h3>
                        <p>A WLL-Sistemas é uma empresa especializada no desenvolvimento de soluções personalizadas para nossos clientes.</p>
                        <p>Nossas soluções visam atender totalmente as necessidades dos nossos clientes, a partir de um eficiente processo que engloba todo o ciclo de vida do produto.
                        Levantamos e organizamos os requisitos, analisamos e projetamos os componentes, implementamos, testamos e entregamos o sistema totalmente funcional e atendendo a todas as expectativas.</p>
                     </div>
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="product-content col-md-7 col-xs-12">
                        <h3>Missão</h3>
                        <p>Entendemos que no mercado atual extremamente competitivo as empresas necessitam de agilidade na tomada de decisões e confiança na integridade das informações, por esse motivo nossas soluções tem foco na qualidade e performance.</p>
                        <p>Nosso objetivo é trabalhar em conjunto com nossos clientes, não apenas fornecendo soluções na área de tecnologia da informação, mas colaborando para o seu crescimento.</p>                 
                    </div>
                    <div class="col-md-5 col-xs-12 text-center">
                        <img src="images/missao-empresa.png" alt="Missão da Empresa" title="Missão da Empresa">
                    </div>
                </div> <!-- .col-md-6 -->
            </div>
        </div>
    </div> <!-- #SOBRE -->


    <!-- NEWS TECNOLOGIA -->
    <div id="noticias" class="video-feature content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-header">
                    <h1 class="section-title"><i class='fa fa-rss'></i> Notícias sobre Tecnologia</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">                   
                        <h3 class='blogger'>Últimos Posts do blog <a target="blank" href="http://devwilliam.blogspot.com.br/">devwilliam.blogspot</a></h3>
                        <ul>
                            <li class='item-lista'><a target="blank" href="http://devwilliam.blogspot.com.br/2015/03/fim-do-suporte-engine-bde-no-delphi-x7.html">
                                <i class="fa fa-check"></i> Fim do suporte a Engine BDE no Delphi XE7 preocupa!</a>
                            </li>
                            <li class='item-lista'><a target="blank" href="http://devwilliam.blogspot.com.br/2015/01/10-pegadinhas-da-linguagem-php.html">
                            	<i class="fa fa-check"></i> 10 pegadinhas da linguagem PHP.</a>
                            </li>
                            <li class='item-lista'><a target="blank" href='http://devwilliam.blogspot.com.br/2015/01/desde-quando-desenvolvimento-de.html'>
                            	<i class="fa fa-check"></i> Desde quando Desenvolvimento de Software se tornou obra assintencial.</a>
                            </li>
                            <li class='item-lista'><a target="blank" href="http://devwilliam.blogspot.com.br/2014/12/serie-de-videos-sobre-git.html">
                            	<i class="fa fa-check"></i> Série de vídeos sobre Git.</a>
                            </li>
                        </ul>
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                        <h3 class='news'>NEWS Tecnologia</h3>
                         <ul>
                            <?php foreach($dados as $noticia):?>
                                <li class='item-lista'><a target="blank" href="<?=$noticia->url?>">
                                    <i class="fa fa-check"></i> <?=$noticia->titulo?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                </div> 
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .video-feature -->

    <!-- FAQ -->
    <div class="content-section" id="perguntas-resposta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-header">
                    <h1 class="section-title"><i class='fa fa-question-circle'></i> FAQ - Perguntas e Respostas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">                   
                    <h3 class="section-title text-bold">O QUE É SITE DINÂMICO?</h3>
                    <p>Dinâmicos são sites que possuem sistemas "inteligentes", com capacidade de receber e processar informação, onde o cliente pode conferir a modificação em tempo real. Um sistema dinâmico é composto por ferramentas que facilitam o desenvolvimento e atualização do site, por normalizar a entrada de dados e consequentemente uniformizar a apresentação das informações.</p><br>
                    <h3 class="section-title text-bold">QUAIS SERIAM AS DIFERENÇAS ENTRE SITES ESTÁTICOS E DINÂMICOS?</h3>
                    <p>Em um site estático, para alterar qualquer texto, produto, imagem e etc, é necessário o uso de profissionais especializados.
                    O site dinâmico, permite que qualquer pessoa cadastrada para ter acesso ao site, realize alterações em textos, insira ou exclua produtos, imagens e etc.</p><br>
                    <h3 class="section-title text-bold">QUAL O PRAZO EM MÉDIA PARA SER ENTREGUE UM SITE?</h3>
                    <p>O prazo para desenvolvimento e publicação pode variar conforme a necessidade do cliente, sendo que sites estáticos são finalizados em menos tempo se comparado aos site dinâmicos, pois possuem menos complexidade e na maioria dos projetos não envolvem banco de dados, em média podemos afimar que:
                    <ul>
                        <li class='item-lista'><i class="fa fa-check"></i> Site estático leva 20 dias úteis para ser entregue.</li>
                        <li class='item-lista'><i class="fa fa-check"></i> Site dinâmico pode variar entre 30 à 90 dias dependendo das necessidades do cliente.</li>
                    </ul>
                    </p><br>
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <h3 class="section-title text-bold">O QUE É UM DOMÍNIO?</h3>
                    <p>Domínio é um nome que serve para localizar e identificar você ou sua empresa na Internet, por exemplo www.suaempresa.com.br. O domínio é a base de toda a sua identificação profissional na Internet. É o “sobrenome” do seu site e dos seus e-mails. </p><br>
                    <h3 class="section-title text-bold">O QUE SERIA HOSPEDAGEM?</h3>
                    <p>É a hospedagem dos dados de seu site em um servidor conectado a rede de computadores denominada de Internet. Este servidor deve ficar ativo 24 horas por dia, para que qualquer pessoa de qualquer local, possa acessar o seu site a qualquer momento e também enviar mensagens via e-mail para você.</p><br>
                    <h3 class="section-title text-bold">QUAL SERÁ O MEU INVESTIMENTO PARA MANTÊR UM SITE NA INTERNET?</h3>
                    <p>
                    <ul>
                        <li class='item-lista'><i class="fa fa-check"></i> Desenvolvimento do site (paga apenas uma vez)</li>
                        <li class='item-lista'><i class="fa fa-check"></i> Registro de domínio nacional, em torno de R$ 30,00 por ano.</li>
                        <li class='item-lista'><i class="fa fa-check"></i> Registro de domínio internacional, em torno de R$ 40,00 por ano.</li>
                        <li class='item-lista'><i class="fa fa-check"></i> Hospedagem (existem diversos planos: mensal, trimestral, semestral e anual)</li>
                    </ul>
                    <h3 class='text-bold'><i class='fa fa-thumbs-o-up'></i> Auxiliamos sua empresa em todos os passos necessários para aquisição do domínio e contratação do servidor de hospedagem.</h3>
                    </p><br>
                </div> 
            </div> 
        </div>
    </div>
    <!-- FIM FAQ -->

    <!-- CONTATO -->
    <div class="content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-header">
                    <h1 class="section-title fa fa-envelope"> Entre em contato conosco</h1>
                </div>
            </div>
            <div class="row">
               <div class="col-md-5 contact-info">
                   <p>Envie sua mensagem e solicite um orçamento gratuito, podemos desenvolver uma solução sob medida.</p>
                   <ul>
                       <li><i class="fa fa-user"></i>William</li>
                       <li><i class="fa fa-phone"></i>(11) 99845-2278</li>
                       <li><i class="fa fa-map-marker"></i>willfl2</li>
                       <li><i class="fa fa-envelope"></i><a href="mailto:wllfl@ig.com.br">wllfl@ig.com.br</a></li>
                   </ul>
               </div> <!-- .col-md-5 -->
               <div class="col-md-7">
                    <div class="row">
                        <form class="contact-form" action="#" method="post" id='form-contato'>
                           <fieldset class="col-md-6">
                               <input type="text" name="nome" placeholder="* Nome">
                           </fieldset>
                           <fieldset class="col-md-6">
                               <input type="email" name="email" placeholder="* E-mail">
                           </fieldset>
                           <fieldset class="col-md-12">
                               <input type="text" name="assunto" placeholder="Assunto">
                           </fieldset>
                           <fieldset class="col-md-12">
                               <textarea name="mensagem" id="mensagem" cols="30" rows="5" placeholder="* Digite sua Mensagem"></textarea>
                           </fieldset>
                           <fieldset class="col-md-12">
                               <input type="button" value="Enviar" id='Enviar' class="main-button">
                           </fieldset>
                           <span class='msg'></span>
                        </form>
                    </div> <!-- .row -->
               </div> <!-- .col-md-8 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #contact -->


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <ul class="social-ic-icons">
                        <li><a href="mailto:wllfl@ig.com.br"><i class="fa fa-envelope-o fa-3x"></i></a></li>
                        <li><a target='_blank' href="https://www.facebook.com/pages/WLL-Sistemas-Solu%C3%A7%C3%B5es-em-Tecnologia-da-Informa%C3%A7%C3%A3o/327263654076457?ref=bookmarks"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                    </ul>
                    <b class="blue"> </b><br>
                    <a href="#principal" class="scroll footer-top"><img src="images/wll-sistemas.png" alt="WLL-Sistemas" title="WLL-Sistemas" height="46" width="210" alt=""/></a>
                    <br><br>
                    <span class='texto-footer'>Copyright &copy; 2015</span>
                    <span class='texto-footer'>Desenvolvido por: <a href="http://wllsistemas.com.br" target="_blank">WLL-Sistemas</a></span>
                </div> <!-- .col-md-12 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </footer> <!-- .site-footer -->
    

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script> 
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/jquery.parallax-1.1.3.js"></script> 
    <script src="js/main.js"></script> 
</body>
</html>