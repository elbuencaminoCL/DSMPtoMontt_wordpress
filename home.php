<?php
    /*
    Template Name: Home
    */
?>

<?php get_header(); ?>

    <? include_once('modulos/slider.php');?>    

    <!-- main-->
    <div id="main" class="clearfix">
        <div id="contacto-movil">
            <div class="container">
                <h3>Contacto</h3>
                <a href="">Llamar a Admisión</a>
                <a href="">Llamar a Secretaría</a>
                <a class="como-llegar" href="">¿Cómo llegar al Colegio?</a>
            </div>
        </div>

        <div id="intro">
            <div class="container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="intro">
                        <h2><? the_excerpt();?></h2>
                        <? echo '<h3>'.get_the_content().'</h3>';?>
                    </div>    
                <?php endwhile; endif; ?>
            </div>
        </div>

        <div id="segmentos" class="clearfix block">
            <?php if(function_exists('home_pages')) home_pages("id=".$post->ID."&class=hp&childs=true"); ?>
        </div>

        <div id="noticias" class="block-image clearfix block">
            <div class="container">     
                <div class="block-noticias col-md-7 col-xs-12">
                    <div class="row">
                        <h3>Noticias</h3>
                        <? include_once('modulos/noticias.php');?>
                        <a href="<?php bloginfo('wpurl'); ?>/noticias/" class="ver-todos">Ver todas las Noticias</a>                                                        
                    </div>
                </div>
                <div class="col-md-5 hidden-sm hidden-xs">

                            <h3>Facebook Feed</h3>

                            <div class="feed clearfix">

                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no. Platonem prodesset scripserit eu pro, Odio atqui detracto sed ex, sit...</p>
                                
                            </div>

                            <div class="feed clearfix">

                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no. Platonem prodesset scripserit eu pro, Odio atqui detracto sed ex, sit...</p>
                                
                            </div>

                            <div class="feed clearfix">

                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no. Platonem prodesset scripserit eu pro, Odio atqui detracto sed ex, sit...</p>
                                
                            </div>

                            <div class="feed clearfix">

                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no. Platonem prodesset scripserit eu pro, Odio atqui detracto sed ex, sit...</p>
                                
                            </div>      

                        </div>

                    </div>      
        </div>      

        <div id="accesos-directos">
            <div class="container">
                <div class="center">
                    <h3>Accesos Directos</h3>
                </div>
                <div class="row">
                    <? include_once('modulos/accesos.php');?>
                </div>
            </div>
        </div>      

        <div id="main-bottom">
            <div class="container">
                <div class="row">
                    <div id="extra" class="col-sm-6 col-xs-12 clearfix">
                        <h3>TALLERES</h3>

                            <a class="taller">
                                <img src="<?php bloginfo('template_directory'); ?>/img/extra-deportivas.jpg">
                                <div class="opacidad-taller"></div>

                                <div>
                                    <span>Deportivas</span>
                                </div>
                            </a>

                            <a class="taller">
                                <img src="<?php bloginfo('template_directory'); ?>/img/artes.jpg">
                                <div class="opacidad-taller"></div>

                                <div>
                                    <span>Artísticas</span>
                                </div>
                            </a>

                            <a href="#" class="ver-todos pull-right">Ver Todos</a>
                        </div>

                        <div id="calendario" class="col-sm-6 col-xs-12 clearfix">

                            <h3>Calendario</h3>

                            <a href="#" class="block clearfix evento">

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-3 fecha">
                                            <div>
                                                <h4>MAR</h4>
                                                <h2>20</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-9 event-desc">
                                            <h4>Titulo evento</h4>
                                            <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
                                            <div class="col-sm-7 lugar-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-lugar.svg"> Lugar evento
                                                </div>
                                            </div>
                                            <div class="col-sm-5 hora-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-hora.svg"> 12:00 Hrs.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="block clearfix evento">

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-3 fecha">
                                            <div>
                                                <h4>MAR</h4>
                                                <h2>20</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-9 event-desc">
                                            <h4>Titulo evento</h4>
                                            <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
                                            <div class="col-sm-7 lugar-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-lugar.svg"> Lugar evento
                                                </div>
                                            </div>
                                            <div class="col-sm-5 hora-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-hora.svg"> 12:00 Hrs.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="block clearfix evento">

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-3 fecha">
                                            <div>
                                                <h4>MAR</h4>
                                                <h2>20</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-9 event-desc">
                                            <h4>Titulo evento</h4>
                                            <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
                                            <div class="col-sm-7 lugar-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-lugar.svg"> Lugar evento
                                                </div>
                                            </div>
                                            <div class="col-sm-5 hora-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-hora.svg"> 12:00 Hrs.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="block clearfix evento">

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-3 fecha">
                                            <div>
                                                <h4>MAR</h4>
                                                <h2>20</h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-9 event-desc">
                                            <h4>Titulo evento</h4>
                                            <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
                                            <div class="col-sm-7 lugar-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-lugar.svg"> Lugar evento
                                                </div>
                                            </div>
                                            <div class="col-sm-5 hora-evento">
                                                <div class="row">
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-hora.svg"> 12:00 Hrs.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="ver-todos pull-right">Ver todo el Calendario</a>
                        </div>

                    </div>
                </div>              
            </div>

        </div><!--/main-->
<?php get_footer(); ?>