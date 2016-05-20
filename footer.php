        <!--FOOTER-->
    <? if(is_page('inicio') || is_front_page()) { ?>
        <footer id="footer" class="clearfix">
    <? } else { ?>
        <footer id="footer" class="clearfix margen-footer">
    <? } ?>
            <div id="footer-pic">
                <div class="overlay"></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/footer.jpg">
            </div>

            <div class="container clearfix">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="bottom-logo">
                            <a href="<?php bloginfo('wpurl'); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
                                <h4>
                                    COLEGIO<br><strong>DOMINGO SANTA MARÍA</strong>
                                </h4>   
                                <span>PUERTO MONTT</span>                                                       
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

            <div id="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            Todos los Derechos Reservados · 
                            <?php $options = get_option('cdsm_theme_options');
                                if ($options['direccion']) {
                                    echo $options['direccion'];
                                }  
                            ?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <ul class="nav navbar-nav navbar-right">
                                    <?php $options = get_option('cdsm_theme_options');
                                        if ($options['telefono']) {
                                            echo '<li class="telefono tel">Teléfono: '.$options['telefono_1'].'</li>';
                                        } 
                                        if ($options['facebook']) {
                                            echo '<li><a href="'.$options['facebook'].'" class="fb">';
                                                echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/ico-fb.svg">';
                                            echo '</a></li>';
                                        } 
                                        if ($options['facebook']) {
                                            echo '<li><a href="'.$options['twitter'].'" class="tt">';
                                                echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/ico-tt.svg">';
                                            echo '</a></li>';
                                        }
                                        if ($options['webmail']) {
                                            echo '<li class="wm"><a href="'.$options['webmail'].'" class="webmail">Webmail</a></li>';
                                        } 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </footer>
        <!--/FOOTER-->
    </div>

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('li.dropdown ul').addClass('dropdown-menu');
            $(".carousel-inner .item:first-child, .carousel-indicators li:first-child").addClass('active');
        });
    </script>
    <? if(is_page('infraestructura')) { ?>
        <script src="<?php bloginfo('template_directory'); ?>/js/infra.js"></script>
    <? } ?>
    <? if(is_page('extra-programaticas')) { ?>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mixitup.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#cont-talleres').mixItUp();
            });
        </script>
    <? } ?>
    <script type="text/javascript">
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $("#header").addClass("chevron");
            } else {
                $("#header").removeClass("chevron");
            }
        });
    </script>
</body>

</html>