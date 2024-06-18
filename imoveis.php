<?php
include_once("config/url.php");
include_once("data/imoveis.php");

// limpa a mensagem
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sifrão Consórcios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="">
	<meta name="description" content="Descrição aqui" />
	<meta name="keywords" content="..." />
	<meta name="author" content="..." />

	<link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <link rel="stylesheet" href="web/templates/model1/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="web/templates/model1/assets/icon54/style.css">
    <link rel="stylesheet" href="web/templates/model1/assets/icon54-v3/style.css">
    <link rel="stylesheet" href="web/templates/model1/assets/icons-mind/style.css">
    <link rel="stylesheet" href="web/templates/model1/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="web/templates/model1/assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="css2-1?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="web/templates/model1/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/templates/model1/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="web/templates/model1/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="web/templates/model1/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="web/templates/model1/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="web/templates/model1/assets/plugins/infinite-slider/infinite-slider.css">
    <link rel="stylesheet" href="assets/plugins/ion-rangeslider/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="web/templates/model1/assets/theme/css/style.css">
    <link rel="stylesheet" href="web/templates/model1/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="web/templates/model1/assets/mobirise/css/mbr-additional.css?v=v1.0-2023.10.22.01.09"
        type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.2.0/mustache.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TZKZ7ZWX1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1TZKZ7ZWX1');
    </script>

    <!-- Stylesheet File -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ver.css">

    <style>
        #hero {
  display: table;
  width: 100%;
  height: 50vh;
  background: url(images/bg-imovel.jpg) top center fixed;
  background-size: cover;
}
    </style>
</head>

<body>

    <!-- header inicio -->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <img src="images/logo.png" alt="logo" /></img>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <!--<li class="menu-active"><a href="#hero">Ínicio</a></li>-->
                    <li><a href="<?= $BASE_URL ?>index.html">Início</a></li>
                    <li><a href="<?= $BASE_URL ?>automoveis.php">Contemplada Veículos</a></li>
                    <li><a href="<?= $BASE_URL ?>consorcio.html">Consórcios</a></li>
                    <li><a href="#" target="_blank"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- hero inicio -->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                </div>
                <div class="actions">
                    
                    <a href="#imoveis" class="btn-services">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; imóveis
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>
            </div>
        </div>
    </section>
  



     <!-- sessão contempladas-->
    <section id="autos" data-bs-version="5.1" class="features25 cid-tLb5zsqAe4 pt-3 pt-lg-5">
        <div class="container">
            <div class="content-wrapper">
                <!-- Funções Header -->
                <div class="row mt-3 mt-lg-5">
                    <div class="col-7">
                        <button id="select-all" type="button"
                            class="btn btn-sm btn-light text-primary text-bold p-0 px-1">
                            <span class="fa fa-check-square-o text-primary"></span>&nbsp;
                            Selecionar todas
                        </button>
                        <button id="unselect-all" type="button"
                            class="btn btn-sm btn-light text-primary text-bold p-0 px-1" style="display: none">
                            <span class="fa fa-eraser text-primary"></span>&nbsp; Limpar
                            seleção
                        </button>
                    </div>

                    <div class="col-5 text-end">

                    </div>
                </div>
     

                <!-- Container imoveis off -->
                <div class="row mx-1" id="imoveis">
                    <?php foreach ($imoveis as $imoveis): ?>

                        <!-- Container primeira Cota -->
                        <div  class="col-12 card-contempladas mb-3 mb-lg-4" id="cotas-container">
                            <div class="row pt-2">
                                <div class="col-2 col-lg-1 text-end text-primary" style="font-size: 40px !important">
                                    <span class="fa fa-home" style="color: black"></span>
                                    <!--icon-->
                                </div>
                                <div class="col-8 col-lg-9">
                                    <div class="text-start text-secondary"
                                        style="font-size: 16px !important; margin-top: 3px">
                                        <span class="text-bold">
                                            <?= $imoveis["administradora."] ?>
                                        </span>
                                    </div>
                                    <div class="text-start text-success text-bold"
                                        style="font-size: 24px !important; margin-top: -5px">
                                        <?= $imoveis["valor_credito."] ?>
                                    </div>
                                </div>
                                <div class="col-2 col-lg-2 pt-2 d-none d-lg-block">
                                    <img src="<?= $imoveis["logo."] ?>" alt="" style="max-width: 270px !important" />
                                </div>
                                <hr style=" color: #ccc !important;margin-top: 5px;margin-bottom: 3px; " />
                                <div class="col-6 col-lg-3">
                                    <span class="text-bold" style="font-size: 12px">Entrada:</span><br />
                                    <?= $imoveis["valor_entrada."] ?>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <span class="text-bold" style="font-size: 12px">Parcelas:</span><br />
                                    <?= $imoveis["prazo."] ?> x
                                    <?= $imoveis["valor_parcela."] ?>
                                </div>
                                <div class="col-6 col-lg-3 d-none d-lg-block">
                                    <span class="text-bold" style="font-size: 12px">Saldo:</span><br />
                                    <?= $imoveis["valor_saldo."] ?>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <span class="text-bold" style="font-size: 12px">Código:</span><br />
                                    <?= $imoveis["codigo."] ?>
                                </div>
                                <div class="col-6 col-lg-3 pt-2 d-lg-none">
                                    <img src="<?= $imoveis["logo."] ?>" alt="" style="max-width: 270px !important" />
                                </div>
                                <hr style="color: #ccc !important;margin-top: 5px;margin-bottom: 3px;" />
                             </div>

                            <div class="row">

                                <!-- Dados Check Box 1 cota -->
                                <div class="col-4 pt-2">
                                    <div class="form-check" class="align-middle">
                                        <input type="checkbox" name="cota[]" id="" class="form-check-input check-soma"
                                            style="cursor: pointer" data-id="<?= $imoveis["codigo."] ?>"
                                            data-credito="<?= $imoveis["credito_calculo."] ?>"
                                            data-categoria="<?= $imoveis["categoria."] ?>"
                                            data-prazo="<?= $imoveis["prazo."] ?>"
                                            data-valor-parcela="<?= $imoveis["parcela_calculo."] ?>" data-transfer="0"
                                            data-seguro="0" data-fundo="0" data-garantia="0"
                                            data-entrada="<?= $imoveis["entrada_calculo."] ?>"
                                            data-administradora="<?= $imoveis["administradora."] ?>"
                                            data-status="<?= $imoveis["condicao."] ?>" data-msg-whats="*Cota Código: 
                                            <?= $imoveis["codigo."] ?>* | <?= $imoveis["categoria."] ?>: 
                                            *<?= $imoveis["valor_credito."] ?>* | Entrada: *<?= $imoveis["valor_entrada."] ?>* 
                                            | Parcelas restantes: *<?= $imoveis["prazo."] ?>* x *<?= $imoveis["valor_parcela."] ?>
                                            *  | Administradora: *<?= $imoveis["administradora."] ?>*/>
                                        <label class=" form-check-label text-secondary text-bold style="font-size: 9px !important">
                                            Selecionar </label>
                                    </div>
                                </div>

                                <!-- Dados Check Box 1 cota off -->
                                <div class="col-4 col-lg-3 offset-lg-2 px-0 d-grid gap-1">
                                    <button href="#" class="btn btn-sm btn-dark py-1 px-0 mx-1 mx-lg-2 "
                                        style="font-size: 12px !important" data-bs-toggle="modal"
                                        data-bs-target=".modal-contempladas-detalhes-<?= $imoveis["modal."] ?>">
                                        <span class="fa fa-search" style="font-size: 12px"></span>&nbsp; Detalhes
                                    </button>
                                </div>
                                <div class="col-4 col-lg-3 px-0 d-grid gap-1">
                                    <a class="btn btn-sm btn-<?= $imoveis["cor_btn."] ?> py-1 px-0 mx-1 mx-lg-2"
                                        style="font-size: 12px !important" target="_blank"
                                        href="https://api.whatsapp.com/send?phone=550000000000&text=Ol%C3%A1,%20vim%20pelo%20site!%20Tenho%20interesse%20pela%20contemplada:%20%0AAdministradora:%20*<?= $imoveis["administradora."] ?>*%0AModalidade:%20*Imóveis*%0ACr%C3%A9dito:%20*<?= $imoveis["valor_credito."] ?>*%0AEntrada:%20*<?= $imoveis["valor_entrada."] ?>*%0AParcelas:%20*<?= $imoveis["prazo."] ?>*%20x%20*<?= $imoveis["valor_parcela."] ?>*%0ASaldo%20Devedor:%20*<?= $imoveis["valor_saldo."] ?>*%0AC%C3%B3d:%20*<?= $imoveis["codigo."] ?>*%0A">
                                        <span class="<?= $imoveis["icon_btn."] ?>" style="font-size: 12px"></span>&nbsp;
                                        <?= $imoveis["condicao."] ?>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Primeira Cota off -->
                        <div class="modal fade modal-contempladas-detalhes-<?= $imoveis["modal."] ?>" tabindex="-1"
                            aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title card-title mbr-fonts-style display-7 text-secondary text-bold">
                                            Informações Cota:
                                            <?= $imoveis["codigo."] ?>
                                        </h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background-color: #f6f6f6">
                                        <div class="row">
                                            <div class="col-12 text-start" style="font-size: 14px; line-height: 1.6rem"
                                                id="detalhes-548-9">
                                                Administradora: <b>
                                                    <?= $imoveis["administradora."] ?>
                                                </b>
                                                <br />
                                                Código: <b>
                                                    <?= $imoveis["codigo."] ?>
                                                </b>
                                                <br />
                                                Segmento: <b>
                                                    <?= $imoveis["categoria."] ?>
                                                </b>
                                                <br />
                                                Crédito: <b>
                                                    <?= $imoveis["valor_credito."] ?>
                                                </b>
                                                <br />
                                                Parcelas: <b>
                                                    <?= $imoveis["prazo."] ?> x
                                                    <?= $imoveis["valor_parcela."] ?>
                                                </b>
                                                <br />
                                                Entrada:
                                                <b>
                                                    <?= $imoveis["valor_entrada."] ?>
                                                </b>
                                                <br />
                                                Transferência:
                                                <b>Consultar</b>
                                                <br />
                                                Saldo devedor: <b>
                                                    <?= $imoveis["valor_saldo."] ?>
                                                </b>
                                                <br />
                                                <br />
                                                Situação: <b class="text-<?= $imoveis["cor_btn."] ?>">
                                                    <?= $imoveis["condicao."] ?>
                                                </b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-sm btn-warning text-secondary py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                                            style="font-size: 12px !important" target="_blank"
                                            href="https://api.whatsapp.com/send?phone=&text=Administradora:%20*<?= $imoveis["administradora."] ?>*%0AModalidade:%20*Imóveis*%0ACr%C3%A9dito:%20*<?= $imoveis["valor_credito."] ?>*%0AEntrada:%20*<?= $imoveis["valor_entrada."] ?>*%0AParcelas:%20*<?= $imoveis["prazo."] ?>*%20x%20*<?= $imoveis["valor_parcela."] ?>*%0ASaldo%20Devedor:%20*<?= $imoveis["valor_saldo."] ?>*%0AC%C3%B3d:%20*<?= $imoveis["codigo."] ?>*">
                                            <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp; Compartilhar
                                        </a>
                                        <a class="btn btn-sm btn-success py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                                            style="font-size: 12px !important" target="_blank"
                                            href="https://api.whatsapp.com/send?phone=550000000000&text=Ol%C3%A1,%20vim%20pelo%20site!%20Tenho%20interesse%20pela%20contemplada:%20%0AAdministradora:%20*<?= $imoveis["administradora."] ?>*%0AModalidade:%20*Imóveis*%0ACr%C3%A9dito:%20*<?= $imoveis["valor_credito."] ?>*%0AEntrada:%20*<?= $imoveis["valor_entrada."] ?>*%0AParcelas:%20*<?= $imoveis["prazo."] ?>*%20x%20*<?= $imoveis["valor_parcela."] ?>*%0ASaldo%20Devedor:%20*<?= $imoveis["valor_saldo."] ?>*%0AC%C3%B3d:%20*<?= $imoveis["codigo."] ?>*%0A">
                                            <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp; Negociar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container primeira Cota off -->
                    <?php endforeach; ?>

                </div>
            </div>
            <!-- Container imoveis off -->

        </div>
    </section>
    <!-- sessão contempladas fim-->


    

    <!-- Funções de Somar e Mostrar Seleção-->
    <section class="widget-container row">
        <div class="share-widget col-6 col-lg-2 offset-lg-4 d-grid pr-0" style="padding-right: 0px !important">
            <button class="btn btn-sm btn-white text-secondary elevation-1 share">
                <span class="fa fa-check-square-o mr-2"></span>
                &nbsp;&nbsp;Seleção
            </button>
        </div>
        <div class="sum-widget col-6 col-lg-2 d-grid pl-0" style="padding-left: 0px !important">
            <button class="btn btn-sm btn-primary elevation-1 somar">
                <span class="fa fa-calculator mr-2"></span>
                &nbsp;&nbsp;Somar
            </button>
        </div>
    </section>

    <!-- Modal Demostra a soma-->
    <div class="modal fade modal-soma" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="overflow-y: initial !important">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title card-title mbr-fonts-style display-7 text-secondary text-bold">
                        Resultado da junção
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left" style="height: 60vh; overflow-y: auto; background-color: #f6f6f6">
                    <div class="row">
                        <div class="col-12 text-start" style="font-size: 14px; line-height: 1.6rem">
                            Crédito: <span class="text-bold" id="total"></span><br />
                            Entrada: <span class="text-bold" id="entrada"></span><br />
                            Média de parcelas:
                            <span class="text-bold" id="media-parcelas"></span><br />
                            Parcelamento:<br />
                            <span class="text-bold" id="parcelamento"></span><br />
                            Transferência: <span class="text-bold" id="transfer"></span><br />
                            Saldo devedor: <span class="text-bold" id="saldo"></span><br />
                            <div id="fc-rg">
                                Fundo comum: <span class="text-bold" id="fundo"></span><br />
                                Avaliação do imóvel:
                                <span class="text-bold" id="garantia"></span><br />
                            </div>
                            Seguro de vida: <span class="text-bold" id="seguro"></span><br />
                            <br />
                            <span class="text-bold">Cotas selecionadas:</span><br />
                            <span id="cotas"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="share-whats" type="button"
                        class="btn btn-sm btn-white text-secondary py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                        style="font-size: 12px !important">
                        <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp;
                        Compartilhar
                    </button>
                    <button id="deal-whats" type="button"
                        class="btn btn-sm btn-success py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                        style="font-size: 12px !important">
                        <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp;
                        Negociar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Demostra a soma off -->


    <!-- Modal demostra Seleção -->
    <div class="modal fade modal-share" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="overflow-y: initial !important">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title card-title mbr-fonts-style display-7 text-secondary text-bold">
                        Cotas selecionadas:
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left" style="height: 60vh; overflow-y: auto; background-color: #f6f6f6">
                    <div class="row">
                        <div class="col-12 text-start" style="font-size: 14px; line-height: 1.6rem">
                            <span id="msg-whats"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="share-whats-list" type="button"
                        class="btn btn-sm btn-white text-secondary py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                        style="font-size: 12px !important">
                        <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp;
                        Compartilhar
                    </button>
                    <button id="deal-whats-list" type="button"
                        class="btn btn-sm btn-success py-1 py-lg-2 px-2 px-lg-3 mx-1 mx-lg-2"
                        style="font-size: 12px !important">
                        <span class="fa fa-whatsapp" style="font-size: 12px"></span>&nbsp;
                        Negociar
                    </button>
                </div>
            </div>
        </div>
    </div>

   
    <!-- seta back top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>





    <!--Web scripts-->
    <script src="web/templates/model1/assets/jquery/jquery.min.js"></script>
    <script src="web/templates/model1/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="web/templates/model1/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="web/templates/model1/assets/ytplayer/index.js"></script>
    <script src="web/templates/model1/assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="web/templates/model1/assets/embla/embla.min.js"></script>
    <script src="web/templates/model1/assets/embla/script.js"></script>
    <script src="web/templates/model1/assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="web/templates/model1/assets/theme/js/script.js"></script>
    <script src="web/templates/model1/assets/plugins/infinite-slider/infinite-slider.min.js"></script>



    <script>
        var formatter = new Intl.NumberFormat("pt-BR", {
            style: "currency",
            currency: "BRL",
            minimumFractionDigits: 2,
        });
    </script>

    <script>
        $(".widget-container").hide();

        $('input[type=checkbox][name="cota[]"]').click(function () {
            if ($(this).is(":checked")) {
                $(".widget-container").fadeIn();
            } else {
                var checkbox = $('input[type=checkbox][name="cota[]"]:checked');

                if (checkbox.length == 0) {
                    $(".widget-container").fadeOut("fast");
                }
            }
        });

        $("#select-all").click(function () {
            $('input[type=checkbox][name="cota[]"]').each(function (
                index,
                element
            ) {
                if ($(this).is(":checked")) { } else {
                    $(this).prop("checked", true);
                    $("#select-all").hide();
                    $("#unselect-all").delay(300).show();
                    $(".widget-container").fadeIn("fast");
                }
            });
        });

        $("#unselect-all").click(function () {
            $('input[type=checkbox][name="cota[]"]').each(function (
                index,
                element
            ) {
                if ($(this).is(":checked")) {
                    $(this).prop("checked", false);
                    $("#unselect-all").hide();
                    $("#select-all").delay(300).show();
                    $(".widget-container").fadeOut("fast");
                } else { }
            });
        });

        $(".modal").on("hidden.bs.modal", function () {
            $('input[type=checkbox][name="cota[]"]').each(function (
                index,
                element
            ) {
                if ($(this).is(":checked")) {
                    $(".widget-container").fadeIn();
                }
            });
        });

        $(".modal").on("shown.bs.modal", function () {
            $(".widget-container").fadeOut("fast");
        });

        $("#download").click(function () {
            $("#table-excel").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Planilha de Contemplados",
                filename: "planilha.xls",
                fileext: ".xls",
            });
        });
    </script>

    <script>
        var somaParcelas = function (arr) {
            return arr.reduce(function (a, b) {
                return a + b;
            }, 0);
        };

        $(".somar").on("click", function () {
            var qtd_cotas = 0;
            var parcelamento = [];
            var cotas = " ";

            var administradora = null;
            var flag_administradora = false;

            var status = null;
            var flag_status = false;

            var categoria = null;
            var flag_categoria = false;

            var credito = 0;
            var total_credito = 0;

            var parcela = 0;
            var total_parcela = 0;

            var prazo = 0;
            var total_prazo = 0;

            var saldo = 0;
            var total_saldo = 0;

            var entrada = 0;
            var total_entrada = 0;
            var flag_entrada = false;

            var transfer = 0;
            var total_transfer = 0;
            var flag_transfer = false;

            var seguro = 0;
            var total_seguro = 0;
            var flag_seguro = false;

            var fundo = 0;
            var total_fundo = 0;
            var flag_fundo = false;

            var garantia = 0;
            var total_garantia = 0;
            var flag_garantia = false;

            if ($('input[type=checkbox][name="cota[]"]').is(":checked")) {
                $('input[type=checkbox][name="cota[]"]').each(function (
                    index,
                    element
                ) {
                    if ($(this).is(":checked")) {
                        if (!categoria) {
                            categoria = $(this).attr("data-categoria");
                        } else if (categoria != $(this).attr("data-categoria")) {
                            flag_categoria = true;
                        }

                        if (!administradora) {
                            administradora = $(this).attr("data-administradora");
                        } else if (
                            administradora != $(this).attr("data-administradora")
                        ) {
                            flag_administradora = true;
                        }

                        if (
                            $(this).attr("data-categoria") == "imóvel" &&
                            $(this).attr("data-fundo") > 0
                        ) {
                            $("#fc-rg").show();
                        } else {
                            $("#fc-rg").hide();
                        }

                        if ($(this).attr("data-status") !== "disponível") {
                            flag_status = true;
                        }

                        if ($(this).attr("data-entrada") == 0) {
                            flag_entrada = true;
                        }
                        if ($(this).attr("data-transfer") == 0) {
                            flag_transfer = true;
                        }
                        if ($(this).attr("data-seguro") == 0) {
                            flag_seguro = true;
                        }
                        if ($(this).attr("data-fundo") == 0) {
                            flag_fundo = true;
                        }
                        if ($(this).attr("data-garantia") == 0) {
                            flag_garantia = true;
                        }

                        qtd_cotas = qtd_cotas + 1;

                        credito = parseFloat($(this).attr("data-credito"));
                        total_credito = total_credito + credito;

                        entrada = parseFloat($(this).attr("data-entrada"));
                        total_entrada = total_entrada + entrada;

                        transfer = parseFloat($(this).attr("data-transfer"));
                        total_transfer = total_transfer + transfer;

                        seguro = parseFloat($(this).attr("data-seguro"));
                        total_seguro = total_seguro + seguro;

                        fundo = parseFloat($(this).attr("data-fundo"));
                        total_fundo = total_fundo + fundo;

                        garantia = parseFloat($(this).attr("data-garantia"));
                        total_garantia = total_garantia + garantia;

                        parcela = parseFloat($(this).attr("data-valor-parcela"));
                        total_parcela = total_parcela + parcela;

                        prazo = parseInt($(this).attr("data-prazo"));
                        total_prazo = total_prazo + prazo;

                        saldo = parcela * prazo;
                        total_saldo = total_saldo + saldo;

                        cotas =
                            cotas +
                            "Cód: " +
                            $(this).attr("data-id") +
                            " - " +
                            $(this).attr("data-categoria") +
                            ": " +
                            formatter.format($(this).attr("data-credito")) +
                            "<br>";

                        parcelamento.push({
                            id: $(this).attr("data-id"),
                            prazo: parseInt($(this).attr("data-prazo")),
                            parcela: parseFloat($(this).attr("data-valor-parcela")),
                        });
                    }
                });
            }

            if (qtd_cotas > 1) {
                if (flag_categoria == true || flag_administradora == true) {
                    alert(
                        "Por favor, verifique a sua seleção e tente novamente!\nNão é possível realizar a soma entre:\n • Categorias diferentes\n • Administradoras diferentes"
                    );
                } else if (
                    flag_status == true &&
                    $("input#somar-conf").attr("data-somar-reservadas") == 0
                ) {
                    alert(
                        "Por favor, verifique a sua seleção e tente novamente!\nNão é possível realizar a soma entre cotas cotas reservadas."
                    );
                } else {
                    $("#total").html(formatter.format(total_credito));
                    $("#saldo").html(formatter.format(total_saldo));

                    if (flag_entrada == true) {
                        $("#entrada").html("Consultar");
                    } else {
                        $("#entrada").html(formatter.format(total_entrada));
                    }

                    if (flag_transfer == true) {
                        $("#transfer").html("Consultar");
                    } else {
                        $("#transfer").html(formatter.format(total_transfer));
                    }

                    if (flag_seguro == true) {
                        $("#seguro").html("Consultar");
                    } else {
                        $("#seguro").html(formatter.format(total_seguro));
                    }

                    if (flag_fundo == true) {
                        $("#fundo").html("Consultar");
                    } else {
                        $("#fundo").html(formatter.format(total_fundo));
                    }

                    if (flag_garantia == true) {
                        $("#garantia").html("Consultar");
                    } else {
                        $("#garantia").html(formatter.format(total_garantia));
                    }

                    media_prazo = parseInt(total_prazo / qtd_cotas);
                    media_parcelas = formatter.format(
                        parseFloat(total_saldo / media_prazo)
                    );
                    $("#media-parcelas").html(media_prazo + " x " + media_parcelas);

                    parcelamento.sort(function (a, b) {
                        if (a.prazo < b.prazo) return -1;
                        if (a.prazo > b.prazo) return 1;
                        return 0;
                    });
                    var prazos = parcelamento.map((item) => item.prazo);
                    var parcelas = parcelamento.map((item) => item.parcela);
                    let prazoAnterior = Math.min.apply(Math, prazos);
                    let contador = parcelas.length;
                    let resultado = 0;
                    let html = "";
                    parcelamento.forEach((item, index) => {
                        if (index === 0) {
                            resultado = somaParcelas(parcelas);
                            html +=
                                "1 à " +
                                prazoAnterior +
                                ": " +
                                formatter.format(resultado) +
                                "<br>";
                        } else {
                            resultado = somaParcelas(
                                parcelas.slice(parcelas.length - contador)
                            );
                            if (prazoAnterior != item.prazo) {
                                if (prazoAnterior + 1 != item.prazo) {
                                    html +=
                                        prazoAnterior +
                                        1 +
                                        " à " +
                                        item.prazo +
                                        ": " +
                                        formatter.format(resultado) +
                                        "<br>";
                                } else {
                                    html +=
                                        item.prazo + ": " + formatter.format(resultado) + "<br>";
                                }
                            }
                        }
                        prazoAnterior = item.prazo;
                        contador--;
                    });

                    $("#parcelamento").html(html);

                    $("#cotas").html(cotas);

                    $(".modal-soma").modal("show");
                }
            } else {
                alert("Por favor, selecione mais de uma opção para realizar a soma.");
            }
        });

        function somaShare() {
            var categoria = "";

            var qtd_cotas = 0;
            var parcelamento = [];
            var cotas = "";

            var credito = 0;
            var total_credito = 0;

            var parcela = 0;
            var total_parcela = 0;

            var prazo = 0;
            var total_prazo = 0;

            var saldo = 0;
            var total_saldo = 0;

            var entrada = 0;
            var total_entrada = 0;
            var flag_entrada = false;

            var transfer = 0;
            var total_transfer = 0;
            var flag_transfer = false;

            var seguro = 0;
            var total_seguro = 0;
            var flag_seguro = false;

            var fundo = 0;
            var total_fundo = 0;
            var flag_fundo = false;

            var garantia = 0;
            var total_garantia = 0;
            var flag_garantia = false;

            if ($('input[type=checkbox][name="cota[]"]').is(":checked")) {
                $('input[type=checkbox][name="cota[]"]').each(function (
                    index,
                    element
                ) {
                    if ($(this).is(":checked")) {
                        if ($(this).attr("data-entrada") == 0) {
                            flag_entrada = true;
                        }
                        if ($(this).attr("data-transfer") == 0) {
                            flag_transfer = true;
                        }
                        if ($(this).attr("data-seguro") == 0) {
                            flag_seguro = true;
                        }
                        if ($(this).attr("data-fundo") == 0) {
                            flag_fundo = true;
                        }
                        if ($(this).attr("data-garantia") == 0) {
                            flag_garantia = true;
                        }

                        categoria = $(this).attr("data-categoria");

                        qtd_cotas = qtd_cotas + 1;

                        credito = parseFloat($(this).attr("data-credito"));
                        total_credito = total_credito + credito;

                        entrada = parseFloat($(this).attr("data-entrada"));
                        total_entrada = total_entrada + entrada;

                        transfer = parseFloat($(this).attr("data-transfer"));
                        total_transfer = total_transfer + transfer;

                        seguro = parseFloat($(this).attr("data-seguro"));
                        total_seguro = total_seguro + seguro;

                        fundo = parseFloat($(this).attr("data-fundo"));
                        total_fundo = total_fundo + fundo;

                        garantia = parseFloat($(this).attr("data-garantia"));
                        total_garantia = total_garantia + garantia;

                        parcela = parseFloat($(this).attr("data-valor-parcela"));
                        total_parcela = total_parcela + parcela;

                        prazo = parseInt($(this).attr("data-prazo"));
                        total_prazo = total_prazo + prazo;

                        saldo = parcela * prazo;
                        total_saldo = total_saldo + saldo;

                        cotas =
                            cotas +
                            "Cód: " +
                            $(this).attr("data-id") +
                            " - " +
                            $(this).attr("data-categoria") +
                            ": " +
                            formatter.format($(this).attr("data-credito")) +
                            "\n";

                        media_prazo = parseInt(total_prazo / qtd_cotas);
                        media_parcelas = formatter.format(
                            parseFloat(total_saldo / media_prazo)
                        );
                        media_parcelas = media_prazo + " x " + media_parcelas;

                        parcelamento.push({
                            id: $(this).attr("data-id"),
                            prazo: parseInt($(this).attr("data-prazo")),
                            parcela: parseFloat($(this).attr("data-valor-parcela")),
                        });
                    }
                });
            }

            if (total_credito != 0.0) {
                $resultado = "";

                $resultado =
                    $resultado + "Crédito: *" + formatter.format(total_credito) + "*\n";

                if (flag_entrada == true) {
                    $resultado = $resultado + "Entrada: Consultar \n";
                } else {
                    $resultado =
                        $resultado +
                        "Entrada: *" +
                        formatter.format(total_entrada) +
                        "*\n";
                }

                $resultado =
                    $resultado + "Média de parcelas: *" + media_parcelas + "*\n";

                parcelamento.sort(function (a, b) {
                    if (a.prazo < b.prazo) return -1;
                    if (a.prazo > b.prazo) return 1;
                    return 0;
                });
                var prazos = parcelamento.map((item) => item.prazo);
                var parcelas = parcelamento.map((item) => item.parcela);
                let prazoAnterior = Math.min.apply(Math, prazos);
                let contador = parcelas.length;
                let resultado = 0;
                let html = "";
                parcelamento.forEach((item, index) => {
                    if (index === 0) {
                        resultado = somaParcelas(parcelas);
                        html +=
                            "*1 à " +
                            prazoAnterior +
                            ": " +
                            formatter.format(resultado) +
                            "*\n";
                    } else {
                        resultado = somaParcelas(
                            parcelas.slice(parcelas.length - contador)
                        );
                        if (prazoAnterior != item.prazo) {
                            if (prazoAnterior + 1 != item.prazo) {
                                html +=
                                    "*" +
                                    (prazoAnterior + 1) +
                                    " à " +
                                    item.prazo +
                                    ": " +
                                    formatter.format(resultado) +
                                    "*\n";
                            } else {
                                html +=
                                    "*" +
                                    item.prazo +
                                    ": " +
                                    formatter.format(resultado) +
                                    "*\n";
                            }
                        }
                    }
                    prazoAnterior = item.prazo;
                    contador--;
                });

                $resultado = $resultado + "Parcelamento:\n" + html + "\n";

                if (flag_transfer == true) {
                    $resultado = $resultado + "Taxa de transf.: *Consultar* \n";
                } else {
                    $resultado =
                        $resultado +
                        "Taxa de transf.: *" +
                        formatter.format(total_transfer) +
                        "*\n";
                }

                if (flag_seguro == true) {
                    $resultado = $resultado + "Serguro de vida: *Consultar* \n";
                } else {
                    $resultado =
                        $resultado +
                        "Seguro de vida: *" +
                        formatter.format(total_seguro) +
                        "*\n";
                }

                if (categoria == "imóvel") {
                    if (flag_fundo == true) {
                        $resultado = $resultado + "Fundo comum: *Consultar* \n";
                    } else {
                        $resultado =
                            $resultado +
                            "Fundo comum: *" +
                            formatter.format(total_fundo) +
                            "*\n";
                    }

                    if (flag_garantia == true) {
                        $resultado = $resultado + "Avaliação do imóvel: *Consultar* \n";
                    } else {
                        $resultado =
                            $resultado +
                            "Avaliação do imóvel: *" +
                            formatter.format(total_garantia) +
                            "*\n";
                    }
                }

                $resultado =
                    $resultado + "Saldo: *" + formatter.format(total_saldo) + "*\n\n";

                $resultado = $resultado + "*Cotas selecionadas:*\n" + cotas;

                return (
                    "*Resultado da soma das cotas contempladas:* \n\n" + $resultado
                );
            }
        }

        $("#share-whats").click(function () {
            $resultado = somaShare();
            window.open(
                "https://api.whatsapp.com/send?text=" +
                window.encodeURIComponent($resultado),
                "popup"
            );
            $(".modal-soma").modal("hide");
        });

        $("#deal-whats").click(function () {
            $resultado = somaShare();

            $resultado = "Olá, tenho interesse na seguinte opção:\n\n" + $resultado;

            window.open(
                "https://api.whatsapp.com/send?phone=5500000000000&text=" +
                window.encodeURIComponent($resultado),
                "popup"
            );
            $(".modal-soma").modal("hide");
        });
    </script>

    <script>
        $(".share").on("click", function () {
            $msg = "";
            $msgShow = "";
            $showModal = false;
            if ($('input[type=checkbox][name="cota[]"]').is(":checked")) {
                $('input[type=checkbox][name="cota[]"]').each(function (
                    index,
                    element
                ) {
                    if ($(this).is(":checked")) {
                        if (
                            $(this).attr("data-entrada") == 0 ||
                            $(this).attr("data-entrada") == null
                        ) {
                            var flag_entrada = true;
                        }
                        if (flag_entrada == true) {
                            var entrada = "Consultar";
                        } else {
                            var entrada = formatter.format($(this).attr("data-entrada"));
                        }

                        if (
                            $(this).attr("data-transfer") == 0 ||
                            $(this).attr("data-transfer") == null
                        ) {
                            var flag_transfer = true;
                        }
                        if (flag_transfer == true) {
                            var transfer = "Consultar";
                        } else {
                            var transfer = formatter.format($(this).attr("data-transfer"));
                        }

                        if (
                            $(this).attr("data-seguro") == 0 ||
                            $(this).attr("data-seguro") == null
                        ) {
                            var flag_seguro = true;
                        }
                        if (flag_seguro == true) {
                            var seguro = "Consultar";
                        } else {
                            var seguro = formatter.format($(this).attr("data-seguro"));
                        }

                        categoria = $(this).attr("data-categoria");

                        $msg =
                            $msg +
                            "Cota de " +
                            $(this).attr("data-categoria") +
                            ", Cód: " +
                            $(this).attr("data-id");
                        if ($(this).attr("data-grupo")) {
                            $msg += "\nGrupo: " + $(this).attr("data-grupo");
                        }
                        $msg +=
                            "\nCrédito: *" +
                            formatter.format($(this).attr("data-credito")) +
                            "*";
                        $msg += "\nEntrada: *" + entrada + "*";
                        $msg +=
                            "\nParcelas restantes: *" +
                            $(this).attr("data-prazo") +
                            " x " +
                            formatter.format($(this).attr("data-valor-parcela")) +
                            "*";
                        $msg += "\nTaxa Transf.: *" + transfer + "*";
                        $msg += "\nSeguro de vida: *" + seguro + "*";

                        if (categoria == "imóvel" && $(this).attr("data-fundo") > 0) {
                            $msg +=
                                "\nFundo comum: *" +
                                formatter.format($(this).attr("data-fundo")) +
                                "*";
                            $msg +=
                                "\nRef. de garantia: *" +
                                formatter.format($(this).attr("data-garantia")) +
                                "*";
                        }

                        $msg +=
                            "\nSaldo devedor: *" +
                            formatter.format(
                                $(this).attr("data-prazo") *
                                $(this).attr("data-valor-parcela")
                            ) +
                            "*";

                        $msg +=
                            "\nAdministradora: *" +
                            $(this).attr("data-administradora") +
                            "*\n\n";

                        //Show Messsage
                        $msgShow =
                            $msgShow +
                            "*Cota de " +
                            $(this).attr("data-categoria") +
                            ", Cód: " +
                            $(this).attr("data-id") +
                            "*";
                        if ($(this).attr("data-grupo")) {
                            $msgShow += "<br>Grupo: " + $(this).attr("data-grupo");
                        }
                        $msgShow +=
                            "<br>Crédito: *" +
                            formatter.format($(this).attr("data-credito")) +
                            "*";
                        $msgShow += "<br>Entrada: *" + entrada + "*";
                        $msgShow +=
                            "<br>Parcelas restantes: *" +
                            $(this).attr("data-prazo") +
                            " x " +
                            formatter.format($(this).attr("data-valor-parcela")) +
                            "*";
                        $msgShow += "<br>Taxa Transf.: *" + transfer + "*";
                        $msgShow += "<br>Seguro de vida: *" + seguro + "*";

                        if (categoria == "imóvel" && $(this).attr("data-fundo") > 0) {
                            $msgShow +=
                                "<br>Fundo comum: *" +
                                formatter.format($(this).attr("data-fundo")) +
                                "*";
                            $msgShow +=
                                "<br>Ref. de garantia: *" +
                                formatter.format($(this).attr("data-garantia")) +
                                "*";
                        }

                        $msgShow +=
                            "<br>Saldo devedor: *" +
                            formatter.format(
                                $(this).attr("data-prazo") *
                                $(this).attr("data-valor-parcela")
                            ) +
                            "*";

                        $msgShow +=
                            "<br>Administradora: *" +
                            $(this).attr("data-administradora") +
                            "*<br><br>";
                    }
                });
                $showModal = true;
            } else {
                alert("Por favor, selecione as cotas!");
            }
            if ($showModal) {
                texto_whats = "*Lista de Cotas Contempladas:* \n\n" + $msg + "\n";
                texto_show = "<b>Lista de Cotas Contempladas:</b><br><br>" + $msgShow;
                $("#msg-whats").html($msgShow);
                $(".modal-share").modal("show");
            }
        });

        $("#share-whats-list").click(function () {
            window.open(
                "https://api.whatsapp.com/send?text=" +
                window.encodeURIComponent(texto_whats)
            );
            $(".modal-share").modal("hide");
        });

        $("#deal-whats-list").click(function () {
            $dealMsg = "Olá, tenho interesse nas seguintes opções:\n\n" + $msg;

            window.open(
                "https://api.whatsapp.com/send?phone=5500000000000&text=" +
                window.encodeURIComponent($dealMsg)
            );
            $(".modal-share").modal("hide");
        });
    </script>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    <script src="js/conec.js"></script>
    <script src="js/data.js"></script>

    <script src="contactform/contactform.js"></script>
    <script src="/js/contact.js"></script>
    <script src="/js/forms.js"></script>
    <script src="/js/about.js"></script>

</body>

</html>