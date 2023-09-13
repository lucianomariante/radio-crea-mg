<?php
require_once ('admin/includes/constantes.php');
require_once ('admin/includes/funcoesBanco.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#36BA9B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#36BA9B">
    <meta name="msapplication-navbutton-color" content="#36BA9B">

    <link rel="icon" type="image/png" href="../../img/favicon.png"/>
    <link rel="stylesheet" href="css/boot.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/tabs.css"/>

</head>
<body>
<!-- HEADER -->
<header class="main_header gradient gradient-blue">
    <div class="container">
        <div class="main_header_logo">
            <img src="img/cra-das-gerais.png">
        </div>

        <nav class="main_header_nav">
            <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
            <div class="main_header_nav_links j_menu_mobile_tab">
                <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                <a class="link transition radius" id="home" title="Home" href="#home">Home</a>
                <a class="link transition radius" id="sobre" title="Sobre" href="#em-pauta">Em Pauta</a>
                <a class="link transition radius" id="contato" title="Blog" href="#contato">Contato</a>
            </div>
        </nav>
        <div class="main_header_logo">
            <img src="img/cramg.png">
        </div>
    </div>
    <div class="main_header_play">
        <div class="container">
            <audio controls="controls" src="https://ssl3.transmissaodigital.com:20032/stream.mp3" autoplay type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
</header>

<!--CONTENT-->
<main class="main_content">

    <!--FEATURED-->
    <article id="home" class="home_featured">
        <div class="home_featured_content container content">
            <header class="home_featured_header">
                <h1>Sua rádio do Conselhor Regional Administração -Minas Gerais!</h1>
                <p class="fontzero"></p>
                <p class="fontzero"></p>
                <p class="fontzero"></p>
                <p class="features">Tecnologia | Comunicação | Integração</p>
            </header>
        </div>
    </article>

    <!-- ABAS -->
    <section id="wrapper">
        <div class="contente">
            <!-- Tab links -->
            <div class="tabs">
                <button class="tablinks active" data-country="Noticias">
                    <p data-title="Notícias do CRA-MG">Notícias do CRA-MG</p>
                </button>
                <button class="tablinks" data-country="Especiais">
                    <p data-title="Especiais">Especiais</p>
                </button>
                <button class="tablinks" data-country="Fique">
                    <p data-title="Fique por dentro">Fique por dentro da Administração</p>
                </button>
            </div>

            <!-- Tab content -->
            <div class="wrapper_tabcontent">
                <div id="Noticias" class="tabcontent active">
                    <h3>Notícias do CRA-MG</h3>
                    <section class="noticias_section">
                        <?php

                        $paginaAtual = $_GET['paginaAtual'];
                        $itensPorPagina = 9;

                        $limiteInicial = ($paginaAtual - 1) * $itensPorPagina;

                        $list = searchNoticiasPaginacao(4, $limiteInicial, $itensPorPagina);
                        ?>

                        <?php if ($list['quantidadeRegistros'] > 0) :
                            foreach($list['dados'] as $value):
                                list($vIAno, $vIMes, $vIDia) = explode('-', $value['NOTDATAPUBLICACAO']);
                                ?>
                                <article>
                                    <div class="noticias_section_img">
                                        <img src="admin/uploads/noticias/<?= $value['NOTIMAGEM'];?>" />
                                    </div>
                                    <div class="noticias_section_info">
                                        <div class="noticias_section_info_dados">
                                            <h5><a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')">
                                                    <?= $value['NOTMANCHETE'];?>
                                                </a></h5>
                                            <p class="meta"><?= $value['NOTAUTOR'];?></p>
                                            <p class="meta">
                                                <!-- day -->
                                                <span class="day">
                            <?= $vIDia;?>
                        </span>
                                                <!-- month -->
                                                <span class="month">
                            <?= descricaoMes($vIMes);?>
                        </span>
                                            </p>
                                        </div>
                                        <div class="noticias_section_info_play">
                                            <a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')" id="play_materia" title="Ouvir Conteúdo">
                                                <img src="img/ouvir.png">
                                            </a>
                                            <a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&export=download" title="Baixar Conteúdo">
                                                <img src="img/baixar.png">
                                            </a>
                                            <a href="javascript:share_audio('<?= $value['NOTCODIGO']; ?>')" title="Compartilhar Conteúdo">
                                                <img src="img/share.png">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endforeach;
                        else:
                            ?>
                            <h5> Nenhum registro encontrado!</h5>
                        <?php
                        endif;
                        ?>
                    </section>
                </div>

                <div id="Especiais" class="tabcontent">
                    <h3>Especiais</h3>
                    <section class="noticias_section">
                        <?php

                        $paginaAtual = $_GET['paginaAtual'];
                        $itensPorPagina = 9;

                        $limiteInicial = ($paginaAtual - 1) * $itensPorPagina;

                        $list = searchNoticiasPaginacao(5, $limiteInicial, $itensPorPagina);
                        ?>

                        <?php if ($list['quantidadeRegistros'] > 0) :
                            foreach($list['dados'] as $value):
                                list($vIAno, $vIMes, $vIDia) = explode('-', $value['NOTDATAPUBLICACAO']);
                                ?>
                                <article>
                                    <div class="noticias_section_img">
                                        <img src="admin/uploads/noticias/<?= $value['NOTIMAGEM'];?>" />
                                    </div>
                                    <div class="noticias_section_info">
                                        <div class="noticias_section_info_dados">
                                            <h5><a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')">
                                                    <?= $value['NOTMANCHETE'];?>
                                                </a></h5>
                                            <p class="meta"><?= $value['NOTAUTOR'];?></p>
                                            <p class="meta">
                                                <!-- day -->
                                                <span class="day">
                            <?= $vIDia;?>
                        </span>
                                                <!-- month -->
                                                <span class="month">
                            <?= descricaoMes($vIMes);?>
                        </span>
                                            </p>
                                        </div>
                                        <div class="noticias_section_info_play">
                                            <a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')" id="play_materia" title="Ouvir Conteúdo">
                                                <img src="img/ouvir.png">
                                            </a>
                                            <a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&export=download" title="Baixar Conteúdo">
                                                <img src="img/baixar.png">
                                            </a>
                                            <a href="javascript:share_audio('<?= $value['NOTCODIGO']; ?>')" title="Compartilhar Conteúdo">
                                                <img src="img/share.png">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endforeach;
                        else:
                            ?>
                            <h5> Nenhum registro encontrado!</h5>
                        <?php
                        endif;
                        ?>
                    </section>
                </div>

                <div id="Fique" class="tabcontent">
                    <h3>Fique por dentro da Administração</h3>
                    <section class="noticias_section">
                        <?php

                        $paginaAtual = $_GET['paginaAtual'];
                        $itensPorPagina = 9;

                        $limiteInicial = ($paginaAtual - 1) * $itensPorPagina;

                        $list = searchNoticiasPaginacao(3, $limiteInicial, $itensPorPagina);
                        ?>

                        <?php if ($list['quantidadeRegistros'] > 0) :
                            foreach($list['dados'] as $value):
                                list($vIAno, $vIMes, $vIDia) = explode('-', $value['NOTDATAPUBLICACAO']);
                                ?>
                                <article>
                                    <div class="noticias_section_img">
                                        <img src="admin/uploads/noticias/<?= $value['NOTIMAGEM'];?>" />
                                    </div>
                                    <div class="noticias_section_info">
                                        <div class="noticias_section_info_dados">
                                            <h5><a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')">
                                                    <?= $value['NOTMANCHETE'];?>
                                                </a></h5>
                                            <p class="meta"><?= $value['NOTAUTOR'];?></p>
                                            <p class="meta">
                                                <!-- day -->
                                                <span class="day">
                            <?= $vIDia;?>
                        </span>
                                                <!-- month -->
                                                <span class="month">
                            <?= descricaoMes($vIMes);?>
                        </span>
                                            </p>
                                        </div>
                                        <div class="noticias_section_info_play">
                                            <a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')" id="play_materia" title="Ouvir Conteúdo">
                                                <img src="img/ouvir.png">
                                            </a>
                                            <a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&export=download" title="Baixar Conteúdo">
                                                <img src="img/baixar.png">
                                            </a>
                                            <a href="javascript:share_audio('<?= $value['NOTCODIGO']; ?>')" title="Compartilhar Conteúdo">
                                                <img src="img/share.png">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endforeach;
                        else:
                            ?>
                            <h5> Nenhum registro encontrado!</h5>
                        <?php
                        endif;
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!--OPTIN-->
    <article id="contato" class="home_optin">

        <div class="home_optin_content container content">

                <header class="home_optin_content_flex">
                    <h2>Fique por dentro das notícias. </h2>
                    <p>Receba todas as novidades referente à Administração, é fácil e gratuito para receber as suas notícias.</p>
                    <img src="img/cramg.png" alt="" title="">
                </header>

                <div class="home_optin_content_flex">
                    <span class="icon icon-check-square-o icon-notext"></span>
                    <h4>Receba suas notícias gratuitamente:</h4>
                    <form action="#" method="post" enctype="multipart/form-data">

                        <input type="text" name="first_name" placeholder="Primeiro nome:"/>
                        <input type="email" name="email" placeholder="Melhor e-mail:"/>

                        <button class="radius transition gradient gradient-blue gradient-hover">Enviar</button>
                    </form>
                </div>

        </div>
    </article>

<!--FOOTER-->
<footer class="main_footer">
    <section class="main_footer_transbox">
        <div class="container content">
            <section class="main_footer_content">
                <article class="main_footer_content_item">
                    <h2>Sobre:</h2>
                    <p>Telefone: (31) 3218-4500</p>
                    <p>Negociações | E-mail: </p>
                    <a title="Termos de uso" href="termos.php"">Termos de uso</a>
                </article>

                <article class="main_footer_content_item">
                    <h2>Sobre nós:</h2>
                    <p> Conselho Regional de Administração de</p>
                    <p> Minas Gerais CNPJ: 16.863.664/0001-14 –</p>
                    <p>Endereço: Av. Olegário Maciel, 1233 –</p>
                    <p>Lourdes, BH – CEP: 30180-111 – Minas Gerais</p>
                </article>

                <article class="main_footer_content_item">
                    <h2>Expediente:</h2>
                    <p>Diretor executivo de Comunicação:</p>
                    <p>Gerente de Imprensa:</p>
                    <p>Coordenador de Rádio e TV:</p>
                    <p>Coordenador Técnico:</p>
                </article>

                <article class="main_footer_content_item social">
                    <h2>Social:</h2>
                    <a target="_blank" class="icon-facebook"
                       href="https://www.facebook.com/nome-face" title="Radio CRA das Gerais no Facebook">/CRA-MG</a>
                    <a target="_blank" class="icon-instagram"
                       href="https://www.instagram.com/nome-instagra" title="Radio CRA das Gerais no Instagram">CRA-MG</a>
                    <a target="_blank" class="icon-youtube"
                       href="https://www.youtube.com/nome-youtube" title="Radio CRA das Gerais no You Tube">CRA-MG</a>

                </article>
            </section>
        </div>
    </section>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/tabs.js"></script>
<script src="js/funcoes.js"></script>

</body>
</html>
