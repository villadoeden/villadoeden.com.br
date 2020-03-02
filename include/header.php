<?php
ini_set('zlib.output_compression','On');
ini_set('zlib.output_compression_level','1');

$urlATUAL = 'http://www.villadoeden.com.br' . $_SERVER['REQUEST_URI'];
$checkbar = substr($urlATUAL, strlen($urlATUAL) - 1);
if ($checkbar == '/') {
$urlatualOK = substr($urlATUAL, 0, -1);
} else {
$urlatualOK = $urlATUAL;
}

$diretoriosite = '/villadoeden.com.br/' ;

include 'config-promocoes.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta name="description" content="<?php echo $descricao; ?>" />
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name=”keywords” content="pousadas em lindoia, pousada+lindoia, hospedagem+lindoia, Villa do Éden, Lindoia,">
        <meta name="author" content="Douglas - Frequência http://www.frequencia.com.br/">

        <meta property="og:title" content="<?php echo $titulo; ?>">
        <meta property="og:site_name" content="Villa do Éden"/>
        <meta property="og:description" content="<?php echo $descricao; ?>">
        <meta property="og:url" content="<?php echo $urlatualOK; ?>"/>
        <meta property="og:type" content="website"/>

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $diretoriosite; ?>assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php echo $diretoriosite; ?>assets/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $diretoriosite; ?>assets/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo $diretoriosite; ?>assets/images/favicons/manifest.json">
        <link rel="mask-icon" href="<?php echo $diretoriosite; ?>assets/images/favicons/safari-pinned-tab.svg" color="#142e70">
        <meta name="theme-color" content="#ffffff">

        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo $diretoriosite; ?>assets/rs-plugin/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo $diretoriosite; ?>assets/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $diretoriosite; ?>assets/rs-plugin/css/navigation.css">

        <script src="https://www.google.com/recaptcha/api.js?render=6Le63bAUAAAAACKs14BjYfzxKuyVIzfTIWIkGKb8"></script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6Le63bAUAAAAACKs14BjYfzxKuyVIzfTIWIkGKb8', { action: 'Contatos' }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
            });
        </script>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/ilightbox.css">
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/sm.css">
        <link rel="stylesheet" href="<?php echo $diretoriosite; ?>assets/css/style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127176966-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-127176966-1');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 
fbq('init', '2502446236464959');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=2502446236464959&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NXQ5TQ4');</script>
<!-- End Google Tag Manager -->


    </head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXQ5TQ4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Page Wrap -->
    <div class="page" id="top">

        <!-- Reserva Fixa Direita-->
        <div class="book-now-wrapper hidden-md hidden-sm hidden-lg hidden-xs">
            <a href="" target="_blank">
                <p class="toggle" id="">Reserva Online</p>
            </a>
        </div>
        <!-- End Reserva Fixa Direita

        <!-- Menu -->
        <nav class="main-nav dark transparent ">
            <div class="container">


                <div class="clearfix"></div>

                <div class="relative clearfix">
                    <div class="nav-logo-wrap local-scroll">
                        <a href="/" class="logo">
                            <img src="<?php echo $diretoriosite; ?>assets/images/logo.png" class="img-responsive" alt="Logo Villa do Éden" title="Villa do Éden logotipo" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>

                    <p class="info-top center-block hidden-xs hidden-sm text-right" >

                        <span class="" style="font-size: 18px; color: #30140a">RESERVAS:  (11) 97523-2698<i class="fa fa-whatsapp"></i> &nbsp;&nbsp; (19) 3898-1252 &nbsp;&nbsp; (11) 5549-5938 </span>
                        <a href="https://www.facebook.com/villadoeden" target="_blank"> <i class="fa fa-2x fa-facebook-square" style="color:#4267B2; position: relative; top: 3px"> </i> </a>
                        <a href="https://www.instagram.com/villadoeden/?hl=pt-br" target="_blank"> <i class="fa fa-2x fa-instagram" style="color: #D0327C; position: relative; top: 3px; color: "> </i> </a>
                        <a href="https://www.tripadvisor.com.br/Hotel_Review-g3844153-d4512462-Reviews-Villa_do_Eden-Lindoia_State_of_Sao_Paulo.html" target="_blank"> <i class="fa fa-2x fa-tripadvisor" style="color: #6d9628; position: relative; top: 3px; color: "> </i> </a>
                    </p>

                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">

                            <li><a href="<?php echo $diretoriosite;?>villadoeden">A Villa do Éden</a></li>
                            <li><a href="<?php echo $diretoriosite;?>acomodacoes">Acomodações</a></li>
                            <li>
                                <a href="#" class="mn-has-sub">Lazer <i class="fa fa-angle-down"></i></a>
                                <ul class="mn-sub">
                                    <li class="">
                                        <a href="<?php echo $diretoriosite;?>lazer" target="_self" onclick="javascript:location.href='lazer'" class="mn-has-sub">Villa do Éden</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $diretoriosite;?>sitio" target="_self" onclick="javascript:location.href='sitio'" class="mn-has-sub">Sítio Vale do Éden</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $diretoriosite;?>cafe-manha">Café da Manhã</a></li>
                            <li><a href="<?php echo $diretoriosite;?>promocoes">Promoções</a></li>
                            <li><a href="<?php echo $diretoriosite;?>eventos">Eventos</a></li>
                            <li><a href="<?php echo $diretoriosite; ?>contato">Contato</a></li>
                            <!--<li><a href="<?php echo $diretoriosite;?>faleconosco">Fale Conosco</a></li>-->


                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Slider -->
        <?php if($pagina == ''){ ?>

        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider"  data-version="5.0">
                <?php if($pagina == ''){ ?>
                    <ul>

                        <?php
                        for ($n = 1; $n <= $quantidadepacotes; $n++) {
                            $nomepacote = $idpacote[$n]['nomepacote'];
                            $imagem1pacote = $idpacote[$n]['imagem1'];
                            $sliderpacote = $idpacote[$n]['slider'];
                            $linkpacote = str_replace("- ", "", $nomepacote);
                            $linkpacote = strtolower(retira_acentos(str_replace(" ", "-", $linkpacote)));
                            if ($sliderpacote == 'S') {
                                ?>
                                <li data-link="<?php echo $diretoriosite; ?>promocoes/<?php echo $n; ?>/<?php echo $linkpacote; ?>" data-thumb="<?php echo $diretoriosite; ?><?php echo $imagem1pacote; ?>" data-rotate="0" data-saveperformance="on" data-title="<?php echo $nomepacote; ?>">
                                    <img  src="<?php echo $diretoriosite; ?><?php echo $imagem1pacote; ?>" width="100%" class="img-responsive" >

                                </li>

                                <?php
                            }
                        }
                        ?>

                        <li data-thumb="<?php echo $diretoriosite; ?>assets/images/slider/01.jpg" data-rotate="0" data-saveperformance="off" data-title="Acomodações">
                            <img src="<?php echo $diretoriosite; ?>assets/images/slider/01.jpg"  alt=""  width="100%" class="img-responsive" >

                        </li>

                        <li data-thumb="<?php echo $diretoriosite; ?>assets/images/slider/02.jpg" data-rotate="0" data-saveperformance="off" data-title="Lazer">
                            <img src="<?php echo $diretoriosite; ?>assets/images/slider/02.jpg"  alt="" width="100%" class="img-responsive"  >

                            <!-- LAYER NR. 1 -->
                        </li>


                  </ul>
                <?php } ?>


                <?php if($pagina == '404'){ ?>
                    <ul>
                        <li data-transition="fade" data-thumb="<?php echo $diretoriosite; ?>assets/images/404.jpg" data-rotate="0" data-saveperformance="off" data-title="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $diretoriosite; ?>assets/images/404.jpg"  alt=""
                                 data-bgposition="botton left"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-kenburns="on"
                                 data-duration="6500"
                                 data-ease="Linear.easeNone"
                                 data-scalestart="150"
                                 data-scaleend="100"
                                 data-rotatestart="0"
                                 data-rotateend="0"
                                 data-offsetstart="0 0"
                                 data-offsetend="0 0"
                                 data-bgparallax="10"

                            >
                            <!-- LAYER NR. 1 -->

                            <div class="tp-caption News-Subtitle"
                                 data-x="center" data-hoffset=""
                                 data-y="center" data-voffset="140"
                                 data-height="['auto','auto','auto','auto']"
                                 data-transform_idle="o:1;tO:0% 50%;"

                                 data-transform_in="x:-50px;rY:-90deg;opacity:0;s:2000;e:Back.easeOut;"
                                 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-start="1500"
                                 data-splitin="lines"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05" style="text-align: center" >

                                Ops! Ocorreu um erro. página não encontrada.
                            </div>

                            <div class="tp-caption News-Title"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="90"
                                 data-transform_idle="o:1;"

                                 data-transform_in="x:{-50,50};y:{-5,50};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"

                                 data-elementdelay="0.05"
                                 data-start="2000">Erro
                            </div>
                        </li>
                    </ul>
                <?php } ?>


            </div><!-- END REVOLUTION SLIDER -->
            <!-- Icon para descer -->
            <div class="hidden-sm hidden-xs">
                <span id="arrow" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></span>
            </div>
            <!-- End Scroll Down -->
        </div><!-- END OF SLIDER WRAPPER -->

        <?php } ?>

        <!-- End Slider -->
        <!--
        <div style="background: url('assets/images/bg-reserva.jpg') center center no-repeat ; padding: 0 0 25px 0; position: relative; top: -1px; margin-bottom: -2px" class="reserva hidden-xs">
            <div style="width: 420px; margin: 0 auto">
                <script id="bukly-script" type="text/javascript" src="https://bukly.com/js/bukly-hotel-widget-v2.js"></script>
                <script type="text/javascript">startBukly('hotelguarany', 'pt')</script>
            </div>

        </div>
        -->