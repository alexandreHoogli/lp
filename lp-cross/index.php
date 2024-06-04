<?php
include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(6);

include "Class/textos.class.php";
$puxaTexto = Textos::getInstance(Conexao::getInstance());
$home = $puxaTexto->rsDados(69);

include "Class/faqs.class.php";
$faq = Faqs::getInstance(Conexao::getInstance());
$puxaFaq = $faq->rsDados();

include "Class/especialidades.class.php";
$puxaIcones = Especialidades::getInstance(Conexao::getInstance());
$icones = $puxaIcones->rsDados();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php include "head.php"?>

<body>
    <div class="page-wrapper">

        <?php include "header.php"?>

        <div class="stricky-header stricky-header--style2 stricked-menu main-menu">
            <div class="sticky-header__content">
            </div>
        </div>
        <style>
         .banner-two{
            background: linear-gradient(180deg, rgba(0,10,34,1) 0%, rgba(0,31,64,1) 15%, rgba(0,54,92,1) 65%);
        }
        </style>
        <section class="banner-two clearfix" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-two__inner-box">
                            <div class="banner-two__content">
                                <div class="section-title">
                                    <h1 class="section-title__title"><?php echo $puxaBanners->titulo1?></h1>
                                </div>
                                <p class="banner-two__text wow slideInUp animated" data-wow-delay="0.5s" data-wow-duration="1500ms"><?php echo $puxaBanners->breve?></p>
                                <?php if ($puxaBanners->tem_botao = "S"){?>
                                <div class="banner-two__btn wow slideInUp animated" data-wow-delay="0.8s" data-wow-duration="1500ms">
                                    <a href="<?php echo $puxaBanners->link_botao?>" aria-label="<?php echo $puxaBanners->texto_ancora?>" class="thm-btn"><?php echo $puxaBanners->nome_botao?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                            <div class="banner-one__banner-img wow slideInRight animated" data-wow-delay="300ms" data-wow-duration="2500ms" >
                                <img src="<?php echo SITE_URL.'/img/'.$puxaBanners->foto?>" alt="<?php echo $infoSistema->nome_empresa?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="franqueados" id="section1" class="service-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="section-title__tagline">
                                <h2><?php echo $home->titulo?></h2>
                            </div>
                            <h3 class="section-title__title"><?php echo $home->titulo2?></h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="section-title__tagline">
                                <p><?php echo $home->titulo7?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="service-two__img-box">
                            <div class="service-two__img">
                                <img class="naoaparecetablet" loading="lazy" src="<?php echo SITE_URL.'/img/'.$home->foto_23?>" alt="<?php echo $home->legenda6?>" />
                                <img class="aparecetablet" loading="lazy" src="<?php echo SITE_URL.'/img/'.$home->foto_10?>" alt="<?php echo $home->legenda6?>" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="service-two__content-box" style="text-align: -webkit-center;padding-top:30px">
                            <div class="service-two__inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.1s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img loading="lazy"   src="<?php echo SITE_URL.'/img/'.$home->foto_13?>" alt="<?php echo $home->legenda10?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo10?></h4>
                                                <span><?php echo $home->breve8?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.3s">
                                        <div class="service-two__single">
                                            <div class="service-two__single-icon">
                                                <img loading="lazy"  src="<?php echo SITE_URL.'/img/'.$home->foto_14?>" alt="<?php echo $home->legenda11?>" />
                                            </div>
                                            <div class="service-two__single-text">
                                                <h4><?php echo $home->titulo11?></h4>
                                                <span> <?php echo $home->breve9?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php if ($home->nome_botao6 <> ''){?>
                                <div class="service-two__btn">
                                    <a href="<?php echo $home->link_botao6?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora6?>"><?php echo $home->nome_botao6?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section data-section="metodologia" id="section2" class="faq-one" style="background: url(<?php echo SITE_URL.'/img/'.$home->foto_3?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <h2><?php echo $home->titulo3?></h2>
                    </div>
                    <h3 class="section-title__title"><?php echo $home->titulo4?></h3>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="faq-one__right-img">
                                <img src="<?php echo SITE_URL.'/img/'.$home->foto_2?>" alt="<?php echo $home->legenda?>" />
                                <?php if ($home->embed <> ''){?>
                                <div class="video-box">
                                    <a class="video-popup wow zoomIn animated animated" data-wow-delay="300ms" data-wow-duration="1500ms" title="<?php echo $home->legenda8?>" href="<?php echo $home->embed?>" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <?php }?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__content-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                               <?php 
                                $firstIteration = true;
                                foreach ($puxaFaq as $faq) if ($faq->faq === '1'){
                                ?>
                                    <div class="accrodion <?php echo ($firstIteration ? 'active' : ''); ?>">
                                        <div class="accrodion-title">
                                            <h3><?php echo $faq->titulo?></h3>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <?php echo $faq->descricao?>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                    $firstIteration = false;
                                } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section3" class="features-three" style="background: linear-gradient(180deg, rgba(0,10,34,1) 0%, rgba(0,31,64,1) 15%, rgba(0,54,92,1) 65%);">
            <div class="features-three__content-box">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline">
                            <h2><?php echo $home->breve5?></h2>
                        </div>
                        <h3 class="section-title__title"><?php echo $home->titulo8?></h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 wow " data-wow-delay="0ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="features-three__single-icon">
                                    <img loading="lazy"  src="<?php echo SITE_URL.'/img/'.$home->foto_4?>" alt="<?php echo $home->legenda2?>" />
                                </div>
                                  <h4 class="features-three__single-title"><?php echo $home->titulo6?></h4>
                                <?php echo $home->breve2?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 wow " data-wow-delay="100ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="features-three__single-icon">
                                    <img loading="lazy"  src="<?php echo SITE_URL.'/img/'.$home->foto_6?>" alt="<?php echo $home->legenda4?>" />
                                </div>
                                <h4 class="features-three__single-title"><?php echo $home->titulo5?></h4> 
                                <?php echo $home->breve3?>
                            </div>
                        </div>
                    </div>
                    <div class="service-two__btn three-btn">
                    <a href="<?php echo $home->link_botao14?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora14?>"><?php echo $home->nome_botao14?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </section> 
        <section id="section4" class="features-three" style="background: url(<?php echo SITE_URL.'/img/'.$home->foto_7?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="features-three__content-box">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline">
                            <h2><?php echo $home->breve?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($icones as $icone){?>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow " data-wow-delay="0ms"
                            data-wow-duration="1000ms">
                            <div class="features-three__single text-center">
                                <div class="layer-outer">
                                </div>
                                <div class="features-three__single-icon">
                                    <img loading="lazy" width="70" height="70" src="<?php echo SITE_URL.'/img/'.$icone->foto?>" alt="<?php echo $icone->legenda_imagem?>" />
                                </div>
                                <h4 class="features-three__single-title"><?php echo $icone->titulo?></h4> 
                                <?php echo $icone->descricao?>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="suporte" id="section5" class="about-two" style="background: linear-gradient(180deg, rgba(0,10,34,1) 0%, rgba(0,31,64,1) 33%, rgba(0,54,92,1) 65%);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__left-img-box">
                                <div class="about-two__left-img1">
                                    <?php
                                    if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                                        $var = SITE_URL.'/img/'.$home->foto_11;
                                        $leg = $home->legenda7;
                                        echo'<img loading="lazy" src="'.$var.' " width="550" height="290" alt="'.$leg.'">';
                                    } else {
                                        $var2 = SITE_URL.'/img/'.$home->foto_11;
                                        $leg2 = $home->legenda7;
                                        echo'<img loading="lazy" src="'.$var2.' " width="550" height="290" alt="'.$leg2.'">';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title">
                                <div class="section-title__tagline">
                                    <h2><?php echo $home->titulo9?></h2>
                                </div>
                            </div>
                            <div class="about-two__right-inner">
                                <?php echo $home->breve6?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="section-title__tagline">
                                <h3><?php echo $home->breve7?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="features-one__single">
                                    <div class="features-one__single-left">
                                        <div class="features-one__single-left-text">
                                            <?php echo $home->breve4?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="features-one__single">
                                    <div class="features-one__single-left">
                                        <div class="features-one__single-left-text">
                                           <?php echo $home->breve10?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="features-one__single">
                                    <div class="features-one__single-left">
                                        <div class="features-one__single-left-text">
                                            <?php echo $home->breve11?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="features-one__single">
                                    <div class="features-one__single-left">
                                        <div class="features-one__single-left-text">
                                            <?php echo $home->breve15?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($home->nome_botao5 <> ''){?>
                        <div class="about-two__right-btn">
                            <a href="<?php echo $home->link_botao5?>" class="thm-btn" aria-label="<?php echo $home->texto_ancora?>"><?php echo $home->nome_botao5?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="payback" id="section6" class="service-two" style="background: url(<?php echo SITE_URL.'/img/'.$home->foto_24?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="section-title">
                            <div class="section-title__tagline">
                                <h2><?php echo $home->titulo12?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="service-two__img-box">
                            <div class="service-two__img">
                                 <?php
                                if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                                    $var = SITE_URL.'/img/'.$home->foto_12;
                                    $leg = $home->legenda9;
                                    echo'<img loading="lazy" src="'.$var.' " width="360" height="389" alt="'.$leg.'">';
                                } else {
                                    $var2 = SITE_URL.'/img/'.$home->foto_12;
                                    $leg2 = $home->legenda9;
                                    echo'<img loading="lazy" src="'.$var2.' " width="" height="" alt="'.$leg2.'">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="service-two__img-box">
                            <div class="service-two__img">
                                 <?php
                                if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                                    $var = SITE_URL.'/img/'.$home->foto_8;
                                    $leg = $home->legenda5;
                                    echo'<img loading="lazy" src="'.$var.' " width="360" height="389" alt="'.$leg.'">';
                                } else {
                                    $var2 = SITE_URL.'/img/'.$home->foto_8;
                                    $leg2 = $home->legenda5;
                                    echo'<img loading="lazy" src="'.$var2.' " width="" height="" alt="'.$leg2.'">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section7" class="section-img">
            <div class="">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_9?>" alt="<?php echo $home->texto_ancora3?>"/>
                    </div>
                    <div class="col-lg-3">
                        <img src="<?php echo SITE_URL.'/img/'.$home->foto?>" alt="<?php echo $home->texto_ancora1?>"/>
                    </div>
                    <div class="col-lg-3">
                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_5?>" alt="<?php echo $home->link_botao?>"/>
                    </div>
                    <div class="col-lg-3">
                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_15?>" alt="<?php echo $home->legenda12?>"/>
                    </div>
                </div>
            </div>
            
        </section>
        <section id="section8" class="working-process-one" style="background: linear-gradient(180deg, rgba(0,10,34,1) 0%, rgba(0,31,64,1) 33%, rgba(0,54,92,1) 65%);">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline">
                        <h2><?php echo $home->titulo21?></h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="working-process-one__wrapper">
                            <ul class="list-unstyled">
                                <li class="working-process-one__single top50 text-center wow fadeInLeft animated">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_16?>" alt="<?php echo $home->legenda13?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo13?></p>
                                </li>
                                <li class="working-process-one__single style2 text-center wow fadeInLeft animated">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_17?>" alt="<?php echo $home->legenda14?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo14?></p>
                                </li>
                                <li class="working-process-one__single top65 text-center wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_22?>" alt="<?php echo $home->legenda18?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo15?></p>
                                </li>
                                <li class="working-process-one__single style2 top20 text-center wow fadeInRight animated" data-wow-delay="100ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_18?>" alt="<?php echo $home->legenda15?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo16?></p>
                                </li>
                                <li class="working-process-one__single top65 text-center wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_19?>" alt="<?php echo $home->legenda16?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo17?></p>
                                </li>
                                <li class="working-process-one__single style2 top20 text-center wow fadeInRight animated" data-wow-delay="100ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInRight;">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_20?>" alt="<?php echo $home->legenda17?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo18?></p>
                                </li>
                                <li class="working-process-one__single top65 text-center wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                    <div class="working-process-one__single-icon">
                                        <img src="<?php echo SITE_URL.'/img/'.$home->foto_21?>" alt="<?php echo $home->titulo19?>"/>
                                        <div class="count-box counted"></div>
                                    </div>
                                    <p class="working-process-one__single-text"><?php echo $home->titulo20?></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="duvidas" id="section9" class="faq-one" style="background: url(<?php echo SITE_URL.'/img/'.$home->foto_25?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <h2><?php echo $home->titulo22?></h2>
                    </div>
                    <h3 class="section-title__title"><?php echo $home->titulo23?></h3>
                </div>
                <div class="row">
                    <?php
                    // Filtra as FAQs válidas
                    $filteredFaqs = array_filter($puxaFaq, function ($faq) {
                        return isset($faq->faq) && $faq->faq == '2' && isset($faq->titulo) && isset($faq->descricao);
                    });
                
                    // Remove entradas vazias
                    $filteredFaqs = array_values($filteredFaqs);
                
                    $faqsPerColumn = ceil(count($filteredFaqs) / 2);
                
                    for ($columnIndex = 0; $columnIndex < 2; $columnIndex++) {
                        echo '<div class="col-xl-6">';
                        echo '<div class="faq-one__content-box">';
                        echo '<div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">';
                
                        for ($i = $columnIndex * $faqsPerColumn; $i < min(($columnIndex + 1) * $faqsPerColumn, count($filteredFaqs)); $i++) {
                            $faq = $filteredFaqs[$i];
                
                            echo '<div class="accrodion ' . (($i % $faqsPerColumn === 0) ? 'active' : '') . '">';
                            echo '<div class="accrodion-title">';
                            echo '<h4>' . htmlspecialchars($faq->titulo) . '</h4>';
                            echo '</div>';
                            echo '<div class="accrodion-content" style="display: ' . (($i % $faqsPerColumn === 0) ? 'block' : 'none') . ';">';
                            echo '<div class="inner">';
                            echo '<p>' . ($faq->descricao) . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <section data-section="contato" id="section10" class="contact-page pt-90" style="background: linear-gradient(180deg, rgba(0,10,34,1) 0%, rgba(0,31,64,1) 33%, rgba(0,54,92,1) 65%);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bloq" style="margin-top: 73px;">
                             <div class="">
                                    <h2><?php echo $home->titulo24?></h2>
                                    <p class="p-2">
                                      <?php echo $home->titulo25?>  
                                    </p>
                                    <p class="p-3">
                                        <?php echo $home->titulo26?>  
                                    </p>
                                </div>
                        </div>
                        
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__inner" >
                            <div class="section-title text-center">
                                <div class="section-title__tagline">
                                    <h2><?php echo $home->titulo27?> </h2>
                                </div>
                            </div>
                            <form class="contact-page__form " method="POST">
                                <?php if (!empty($erros)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Seu contato não foi enviado:
                                        <ul class="mb-0">
                                        <?php foreach ($erros as $erro)
                                            echo '<li>' . htmlspecialchars($erro) . "</li>\n";
                                        ?>
                                        </ul>
                                    </div>
                                <?php }?>
                                 <input type="text" name="empresa" id="empresa" style="position: absolute;top: -9999999px;">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Nome" name="nome">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" id="Telefone" placeholder="Telefone" name="telefone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-box">
                                            <select class="selectpicker" aria-label="Default select example" tabindex="null">
                                                <option selected="">Qual é o seu capital disponível?</option>
                                                <option value="R$ 100.000,00">R$ 100.000,00</option>
                                                <option value="R$ 115.000,00">R$ 115.000,00</option>
                                                <option value="R$ 130.000,00">R$ 130.000,00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="math">
                                        <p id="conta" style="color: #fff;margin-left: 13px;margin-top: 17px;"><span id="valor1"></span> + <span id="valor2"></span> =</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-8 col-lg-8">
                                    <div class="math">
                                        <input class="form-control" id="totalvalores" type="text" name="totalvalores" placeholder="Total soma" required style="text-align-last: auto;">
                                    </div>
                                </div>
                                        
                                <div class="col-md-12 col-lg-4">
                                    <p id="aviso"></p>
                                    <p class="form-message"></p>
                                </div>
                                        
                                <div class="col-lg-12" style="text-align: center;">
                                    <input type="submit" placeholder="Enviar" class="thm-btn">
                                </div>
                                
                                <input type="hidden" name="acaoEnvio2" id="enviar" value="Enviar">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include "footer.php"?>

    </div>

   <?php include "menu-mobile.php"?>
    <script>
        var valor1 = Math.floor((Math.random() * 10) + 1);
        var valor2 = Math.floor((Math.random() * 10) + 1);
        document.getElementById("valor1").innerHTML = valor1;
        document.getElementById("valor2").innerHTML = valor2;
        document.getElementById("enviar").setAttribute("disabled", "");
        document.getElementById('totalvalores').onchange = function() {
          validar()
        }
        function validar() {
          var totalvalores = document.getElementById("totalvalores").value;
          if (totalvalores == valor1 + valor2) {
            document.getElementById('aviso').innerHTML = "reCAPTCHA válido";
            document.getElementById("enviar").removeAttribute("disabled");
          } else {
            document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";
            document.getElementById("enviar").setAttribute("disabled", "");
          }
        }
    </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var telefoneInput = document.getElementById("Telefone");
            telefoneInput.addEventListener("input", function() {
            var valor = telefoneInput.value;
            valor = valor.replace(/\D/g, '');
            valor = valor.substring(0, 11);
            valor = valor.replace(/(\d{2})(\d)/, "($1) $2");
            valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
            telefoneInput.value = valor;
            });
            })
    </script>
     <script>
    document.addEventListener("DOMContentLoaded", function () {
        const sectionLinks = document.querySelectorAll('a[href^="#"]');
        sectionLinks.forEach(function (link) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetSectionId = this.getAttribute("href").substring(1);
                const targetSection = document.querySelector(`[data-section="${targetSectionId}"]`);
                if (targetSection) {
                    const offset = targetSection.getBoundingClientRect().top;
                    window.scrollBy({
                        top: offset,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
    </script>
   <?php include "scripts.php"?>

</body>

</html>