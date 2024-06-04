<header class="main-header main-header--two  clearfix">
    <div class="main-header-two__bottom">
        <div class="auto-container">
            <div class="main-header-two__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <div class="left">
                            <div class="logo-box2">
                                <?php
                                    if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                                        $var = SITE_URL.'/img/'.$infoSistema->logo_mobile;
                                        $leg = $infoSistema->nome_empresa;
                                        echo'<img loading="lazy" src="'.$var.' "  alt="Logo do site do(a) '.$leg.'">';
                                    } else {
                                        $var2 = SITE_URL.'/img/'.$infoSistema->logo_principal;
                                        $leg2 = $infoSistema->nome_empresa;
                                        echo'<img loading="lazy" src="'.$var2.' "  alt="Logo do site do(a) '.$leg2.'">';
                                    }
                                    ?>
                                
                            </div>

                            <a href="#" class="mobile-nav__toggler" aria-label="Abrir o header mobile"><i class="fa fa-bars"></i></a>

                            <ul class="main-menu__list">
                                <li><a href="<?php echo SITE_URL?>" aria-label="Link de encaminento para a página principal Home do site">HOME</a>
                                </li>
                                <li><a href="#franqueados" aria-label="FRANQUEADOS <?php echo $infoSistema->nome_empresa?>">FRANQUEADOS</a></li>
                                <li><a href="#metodologia" aria-label="METODOLOGIA <?php echo $infoSistema->nome_empresa?>">METODOLOGIA</a></li>
                                <li><a href="#suporte" aria-label="SUPORTE <?php echo $infoSistema->nome_empresa?>">SUPORTE</a></li>
                                <li><a href="#payback" aria-label="PAYBACK <?php echo $infoSistema->nome_empresa?>">PAYBACK</a></li>
                                <li><a href="#duvidas" aria-label="DÚVIDAS <?php echo $infoSistema->nome_empresa?>">DÚVIDAS</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="main-menu__right">
                                <a href="#contato" aria-label="Entre em contato" class="thm-btn">Entre em Contato <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>