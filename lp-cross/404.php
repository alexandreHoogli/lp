<?php
include "includes.php";
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
       <section class="error-page">
            <style>
      
            .error-404-h1{
                font-size:200px;
            }
            
        </style>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                           
                            <div class="error-page__content text-center wow slideInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                                <h1 class="error-404-h1">404</h1>
                                <h3>Não foi possível encontrar essa página!</h3>
                                <p>A página que você procura não pode ser encontrada, volte para o site clicando no botão a baixo</p>
                                <div class="error-page__btn">
                                    <a href="<?php echo SITE_URL?>"><span class="thm-btn">Voltar a Home <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <?php include "footer.php"?>
    </div>
 <?php include "menu-mobile.php"?>
   <?php include "scripts.php"?>

</body>

</html>