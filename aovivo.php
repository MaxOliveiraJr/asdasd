<!DOCTYPE html>
<html lang="en">

<head>

    <title>Liberal FM - Rádio</title>
    <meta property="og:url" content="http://fm.radioliberal.com.br/">
    <meta property="og:title" content="Liberal FM - Ao vivo">
    <meta property="og:site_name" content="Liberal FM">
    <meta property="og:type" content="article">
    <meta property="fb:app_id" content="123456789000" />
    <meta property="og:description" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará.">
    <meta property="og:image" content="http://fm.radioliberal.com.br/logo_liberal_fm.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="597">
    <meta name="twitter:title" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial FM, na frequência 90.5 MHz.">
    <meta name="twitter:card" content="summary_large_image" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#playerElement,#playerElementint").each(function(index) {
                var largura = $(this).width();
                var altura = (largura * 9) / 16;
                $(this).height(altura);
            });
        });
    </script>

    <script type="text/javascript" src="https://player.wowza.com/player/latest/wowzaplayer.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="mediaelementplayer_liberal.css">
    <link rel="stylesheet" href="css.css">
    <meta property="og:locale" content="pt_BR">
    <script>
        window.onload = function() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                document.getElementById("botcel").style.display = "table";
            }
        }
    </script>
    <style>
        .tocavivo {
            opacity: 1
        }

        html,
        body {
            height: 100%;
        }

        .body-content {
            min-height: 100%;
            /* igual a altura do rodapé */
            margin-bottom: -29px;
            padding-bottom: 29px;
            padding-top: 10px;
        }

        .body-content:after {
            content: "";
            display: block;
        }

        .site-footer,
        .page-wrap:after {
            height: 29px;
        }

        .site-footer {
            text-align: center;
        }

        .site-footer img {
            width: 150px;
        }

        .rodape {
            display: none;
        }

        .conteudo {
            margin-top: 0px;
        }

        .site-footer img {
            width: auto;
        }

        .botmenu {
            position: initial;
            margin: 10px;
        }




        .mejs__controls {
            inline-size: max-content;
        }
    </style>

</head>

<body>


    <form action="#" method="get">
        <select name="lang" hidden>
            <option selected value="pt">Português / Portuguese (pt)</option>
        </select>
        <select name="stretching" hidden>
            <option value="auto" selected>Auto (default)</option>
            <option value="responsive">Responsive</option>
            <option value="fill" selected>Fill</option>
            <option value="none" selected>None (original dimensions)</option>
        </select>
    </form>

    <div class="body-content">
        <div class="conteudo">
            <div class="logos"><a href="fm.php" class="espera tocafm"><img src="logo_liberal_fm.png"> <br> Belém - Ouça</a></div>
            <div class="logos"><a href="aovivo.php" class="espera tocavivo"><img src="logo_liberal_fm.png"> <br> Belém - Veja</a></div>
            <div class="logos"><a href="castanhal.php" class="espera tocacastanhal"><img src="logo_liberal_fm.png"> <br> Castanhal - Ouça</a></div>
            <div class="logos"><a href="am.php" class="espera tocaam"><img src="logo_liberal_am.png"> <br> Ouça</a></div>
            <div class="logos"><a href="music.php" class="espera tocamusic"><img src="logo_libmusic.png"> <br> Webradio</a></div>



            <!--
                <a href="aovivo.php">
                    <img src="mini_app.jpg" style="width: calc(100% - 20px); margin: 10px;">
                </a>
-->

            <div id="playerElement" style="width:calc(100% - 20px); padding:0px; display: table; margin: 10px auto; ">
                <video contrals autoplay id="playerElementint" style="width:100%;" preload="none" controls="false">
                    <source src="https://www.grupoliberalmedia.com.br/radiolive/_definst_/liveradio/playlist.m3u8" type="application/x-mpegURL" />
                </video>
                <!--<video id="playerElementint" style="width:100%;" controls="controls" src="https://5c755d108d3ef.streamlock.net/radiotricaster/_definst_/radiotricaster_360p/playlist.m3u8"></video>-->

            </div>

            <!-- <div id="playerElement" style="width:calc(100% - 20px); padding:0px; display: table; margin: 10px auto; ">
                    <video id="playerElementint" style="width:100%;" preload="none" controls="false">
                        </?php /*  camera ao vivo */  if ($v =='1'){ ?>                    
                        <source src="https://www.grupoliberalmedia.com.br/radiotricaster/_definst_/ngrp:radiotricaster_all/playlist.m3u8" type="application/x-mpegURL" />
                         <source src="https://5c755d108d3ef.streamlock.net/radiotricaster/_definst_/radiotricaster_360p/playlist.m3u8" type="application/x-mpegURL" /> -->

            </?php } /* camera IP */ if ($v=='0' ){ ?>
            <!-- </source src="https://www.grupoliberalmedia.com.br/radiolive/_definst_/liveradio/playlist.m3u8" type="application/x-mpegURL" /> -->
            </?php }?>
            </?php clearstatcache(); ?>
            <!-- </video>
                </div> -->

            <!-- <script>
                $(document).ready(function() {
                    $("#playerElement").each(function(index) {
                        var largura = $(this).width();
                        var altura = (largura * 9) / 16;
                        $(this).height(altura);
                    });

                    /*****************************************************
                 ATUALIZA A PAGINA CASO A VARIAVEL VIDEO SEJA ALTERADA
                ******************************************************/
                    setInterval(function() {
                        $.getJSON("ver_play.php", {}, function(data) {
                            var video = $("#video").val();
                            if (data.video != video) {
                                //console.log("entrou config video");
                                //playerElement.setConfig({
                                //    "sourceURL":"http://[NEW_URL}"
                                //});                            
                                window.location.reload();
                            }
                        });
                    }, 1000 * 60);
                    /**************************1 minuto***************************/
                });
            </script>  -->

        </div>
    </div>
    <input type="hidden" id="video" value="<?= $v ?>">
    <footer class="site-footer">
       
        <div class="rodape">
            <img src="logo_grupo_liberal_h_mono_250px.png">
        </div>
        <script src="mediaelement-and-player_liberal.js"></script>
        <script src="pt.js"></script>
        <script src="demo.js"></script>
    </footer>
</body>

</html>