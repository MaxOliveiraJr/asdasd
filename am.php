<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Liberal AM - Ao vivo</title>

        <meta property="og:url" content="http://am.radioliberal.com.br/">

        <meta property="og:title" content="Liberal AM - Ao vivo">
        <meta property="og:site_name" content="Liberal AM">
        <meta property="og:type" content="article">
        <meta property="fb:app_id" content="123456789000"/>

        <meta property="og:description" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial AM.">

        <meta property="og:image" content="http://am.radioliberal.com.br/logo_liberal_am.png">
        <meta property="og:image:width" content="800"> 
        <meta property="og:image:height" content="597"> 
        <meta name="twitter:title" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial AM, na frequência 90.5 MHz.">
        <meta name="twitter:card" content="summary_large_image"/>

        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-129160083-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['am.radioliberal.com.br'] );
            ga('send', 'pageview');

        </script>

        <?php include("head.php"); ?>

        <style>
            .tocaam{opacity: 1}
        </style>

    </head>
    <body>
        <?php include("form.php"); ?>
        <div class="conteudo">
            <?php include("menu.php"); ?>
            <div class="radio">
                <audio id="player2" preload="none" controls style="max-width:100%;">
                    <source src="http://177.105.192.70:9000/oliberalcbn.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>