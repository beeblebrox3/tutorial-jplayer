<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>jPlayer Tutorial [demo]</title>

        <meta author="Luís Henrique" />
        <meta description="Página de demonstração da utilização do jPlayer" />
        <meta keywords="tutorial, player, javascript player, jquery player, tutorial jplayer" />

        <link rel="stylesheet" href="css/skeleton.css" />
        <link rel="stylesheet" href="css/default.css" />
    </head>
    <body>
        <div class="top-bar">
            <div class="container">
                <div class="player-controls">
                    <span class="player-prev">Prev</span>
                    <span class="player-play">Play</span>
                    <span class="player-pause">Pause</span>
                    <span class="player-stop">Stop</span>
                    <span class="player-next">Next</span>
                </div>
                <div class="player"></div>
                <div class="player-timeline">
                    <div class="player-timeline-control"></div>
                </div>
                <div class="player-display">
                    Playing: <span class="player-current-track"></span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="brand">
                <h1>Site.com</h1>
            </div>

            <div class="banner"></div>
        </div>

        <footer>
            by <a href="http://www.luque.cc/" target="_blank" title="LuQue.cc">LuQue.cc</a>
        </footer>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins/jplayer/jquery.jplayer.min.js"></script>
        <?php
        /* Aqui vou criar um array manualmente com a lista de músicas, mas as informações
           podem vir de qualquer lugar, como um banco de dados */
        $playlist = array (
            array (
                "artist" => 'PHP Daft Punk',
                "title" => 'Technologic',
                "mp3" => 'songs/technologic.mp3',
            ), array (
                "artist" => 'Daft Punk',
                "title" => 'Human After All',
                "mp3" => 'songs/human-after-all.mp3',
            )
        );
        ?>
        <script type="text/javascript">
            /* Agora é só transformar o array do PHP em um json
               para trabalharmos com os dados com JavaScript */
            var playlist = <?= json_encode($playlist); ?>;
        </script>
        <script type="text/javascript" src="js/default.js"></script> 
    </body>
</html>