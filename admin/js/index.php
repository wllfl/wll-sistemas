<?php
require_once "admin/classes/controller.class.php";
$controller = new controller();
$sql = "SELECT titulo, previa, url FROM tab_noticias WHERE status = 'Ativo' ORDER BY data LIMIT 3";
$dados = $controller->getDados($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WLL - Sistemas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="ISO-8859-1">
        <?php // header (contente-TYPETEXT/HTML; charset=ISO-8859-1, TRUE);?>
        <meta http-equiv="Content-Type"  tycontent="text/html; charset=UTF-8">
        <!-- Reforça a busca do google descrição por texto -->
        <meta type ="description" content="WLL Sistemas Desenvolvimento de Sistemas em São Roque, WLL, WL, WLL SISTEMAS, wllsistemas, wll sistemas, WL sistemas, wl sistemas, WL SISTEMAS"/>
        <!-- Reforça a busca do google por palavras -->
        <meta type ="keywords" content="Aplicações Web , Aplicações Desktop ,Construção de Web Sites, São Roque"/>     
        <!-- Reforça o ranking do seu site no google -->
        <meta type = "keyphrase" content="São Roque, Desenvolvimento de Web Sites, Treinamentos, Consultorias "/>
        <link rel="shortcut icon" type="image/ico" href="images/wllicon.png"/>
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="css/style_RS.css" />
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/tms-0.3.js"></script>
        <script type="text/javascript" src="js/tms_presets.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        
        <script>
		$(document).ready(function(e) {
			$('#tecnologia').hide();
			$('#consultoria').hide();
			
			$('#linkEmp').click(function(event){
			   event.preventDefault();
			   $('#tecnologia').hide();
			   $('#consultoria').hide();
			   $("#empresa").show("slow");
			});
			
			$('#linkTec').click(function(event){
			   event.preventDefault();
			   $("#empresa").hide(); 
			   $('#consultoria').hide();
			   $("#tecnologia").show("slow");
			});
			
			$('#linkCons').click(function(event){
			   event.preventDefault();
			   $("#empresa").hide(); 
			   $('#tecnologia').hide();
			   $("#consultoria").show("slow");
			});

        });
		</script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
        <![endif]-->
        <!--[if lt IE 7]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
                </div>
        <![endif]-->
    </head>
    <body id="page1">
        <div class="main">
            <!--header -->
            <header>
                <div class="wrapper">
                    <h1><a href="index.html" id="logo"></a></h1>
                </div>

                <nav>
                    <ul id="menu">
                        <li class="active"><a href="principal.php"><span>Principal</span></a></li>
                        <li class="last"><a href="#"><span>Produtos</span></a></li>
                        <li class="last"><a href="contato.php"><span>Contatos</span></a></li>
                    </ul>
                </nav>
                <div id="slider">
                    <ul class="items">
                        <li>
                            <img src="images/img1.jpg" alt="">
                            <div class="banner">
                                <span class="title"><span class="color2">Fornecemos</span><span class="color1">Propostas</span><span>Para todos segmentos</span></span>
                                <p>Possuímos uma equipe flexível para atender em vários cenários.</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/img3.jpg" alt="">
                            <div class="banner">
                                <span class="title"><span class="color2">As melhores</span><span class="color1">Soluções</span><span>Em tecnologia da Informação</span></span>
                                <p>Soluções personalizadas de acordo com a necessidade do cliente.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--content -->
            <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
                <div class="wrapper">
                    <div class="col1 marg_right1">
                        <h2>Empresa</h2>
                        <p>Nossa equipe dispõe de profissionais capacitados acadêmicamente e com experiência na área de desenvolvimento. <a href="#" id="linkEmp" class="linkDestaque">Leia +</a></p>
                    </div>
                    <div class="col1 marg_right1">
                        <h2>Tecnologia</h2>
                        <p>Estamos atualizando constantemente nossos sistemas com o que existe de mais moderno no mercado tecnológico. <a href="#" id="linkTec" class="linkDestaque">Leia +</a></p>
                    </div>
                    <div class="col1 marg_right1">
                        <h2>Consultoria</h2>
                        <p>Possuímos profissionais capacitados para ministrar treinamento em Cloud Computing. <a href="#" id="linkCons" class="linkDestaque">Leia +</a></p>
                    </div>
                    <div class="col1">
                        <h2><a href="Servicos.php" class="linkDestaque">Serviços</a></h2>
                        <ul class="list1">
                            <li><a href="#">Construção de Web Sites </a></li>
                            <li><a href="#">Aplicações WEB</a></li>
                            <li><a href="#">Aplicações Desktop </a></li>
                            <li><a href="#">Consultorias na área de T.I.</a></li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
        <div class="bg1">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <div class="col2 marg_right1" id="empresa">
                            <h3>Quem somos</h3>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
                                <p class="color2 pad_bot1">A WLL-Sistemas é uma empresa especializada no desenvolvimento de soluções personalizadas para nossos clientes.</p>
                                <p>Nossas soluções visam atender totalmente as necessidades dos nossos clientes, a partir de um eficiente processo que engloba todo o ciclo de vida do produto.</p>
                            </div>
                            <p>Levantamos e organizamos os requisitos, analisamos e projetamos os componentes, implementamos, testamos e entregamos o sistema totalmente funcional e atendendo a todas as expectativas. Além de fornecermos consultoria para implementação de infra-estrutura adequada para casos específicos de cada cliente.</p>
                             <p>Entendemos que no mercado atual extremamente competitivo as empresas necessitam de agilidade na tomada de decisões e confiança na integridade das informações, por esse motivo nossas soluções tem foco na qualidade e performance.</p>
                            <p>Nosso objetivo é trabalhar em conjunto com nossos clientes, não apenas fornecendo soluções na área de tecnologia da informação, mas colaborando para o seu crescimento.</p>
                        </div>
                        
                        <div class="col2 marg_right1" id="tecnologia">
                            <h3>Tecnologia</h3>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/tecnologia.jpg" alt="" height="139" width="192"></figure>
                                <p class="color2 pad_bot1">Acompanhamos as mudanças no mercado tecnológico.</p>
                                <p>As tecnologias empregadas para o desenvolvimento de software sofrem mudanças diariamente, obrigando os profissionais dessa área a estarem constantemente atualizados.</p>
                            </div>
                            <p>Nossa equipe não é diferente, estamos constantemente nos atualizando e aplicando novos conceitos em nossas soluções.</p> 
                            <p>Podemos desenvolver soluções multi-plataformas WEB ou Desktop, envolvendo Windows e Linux. Sempre focando em baixo custo e alta qualidade no produto final para o nosso cliente.</p>
                        </div>
                        
                         <div class="col2 marg_right1" id="consultoria">
                            <h3>Consultoria</h3>
                            <div class="wrapper">
                            	<figure class="left marg_right1"><img src="images/consultoria.jpg" alt="" height="139" width="192"></figure>
                                <figure class="left marg_right1"><img src="images/cloud.jpg" alt=""></figure>
                                <figure class="left marg_right1"><img src="images/banco.jpg" alt="" height="139" width="192"></figure>
							</div>
                            <br/>
                            <ul class="list2">
                                <li class="color2">Treinamento em Cloud Computing - Microsoft Azure</li>
                                <li class="color2">Administração de Banco de Dados</li>
                                <li class="color2">Gestão de Tecnologia da Informação</li>
                                <li class="color2">Reestruturação de T.I.</li>
                            </ul>
                        </div>
                        
                        <div class="col1">
                            <h3>News tecnologia</h3>
                            <ul class="list2">
                            <?php foreach($dados as $noticia): ?>
                                <li><a href="<?=$noticia->url?>"><?=$noticia->titulo?></a><br><?=$noticia->previa?></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="main">
            <!--content end-->
            <!--footer -->
            <footer>
                <?php include'inc_rodape.php'; ?>
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!--footer end-->
        </div>
        <script type="text/javascript"> Cufon.now();</script>
        <script>
            $(window).load(function() {
                $('#slider')._TMS({
                    banners: true,
                    waitBannerAnimation: false,
                    preset: 'diagonalFade',
                    easing: 'easeOutQuad',
                    pagination: true,
                    duration: 400,
                    slideshow: 8000,
                    bannerShow: function(banner) {
                        banner.css({marginRight: -500}).stop().animate({marginRight: 0}, 600)
                    },
                    bannerHide: function(banner) {
                        banner.stop().animate({marginRight: -500}, 600)
                    }
                })
            })
        </script>
    </body>
</html>
