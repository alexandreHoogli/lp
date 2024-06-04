<?php

include "includes.php";

include "Class/banners.class.php";
$banner = Banners::getInstance(Conexao::getInstance());
$puxaBanners = $banner->rsDados(21);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
include "head.php";

?>

<body>
    <?php
    include "header.php";

    ?>
    <div class="page-wrapper">

        <section class="about-one about-one--about" style="height: 87vh;">
            <div class="container" style="padding:180px 0;">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title">
                                <div class="section-title__tagline">

                                    <h4 style="color:#053554">Sua mensagem foi enviada com sucesso!</h4>
                                </div>
                            </div>
                            <div class="about-one__right-inner">
                                <div class="about-one__btn">
                                    <a href="<?php echo SITE_URL ?>" class="thm-btn"
                                        aria-label="Link de encaminhamento para a página principal">Voltar<i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "footer.php" ?>

    </div>

    <?php include "menu-mobile.php" ?>

    <?php include "scripts.php" ?>


</body>

</html>