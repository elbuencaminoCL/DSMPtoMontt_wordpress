<?php get_header(); ?>

	<!--main-->
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!--
				<div id="foto-encabezado" class="absolute">
					<?php 
						$image = get_field('_cabecera');
						$size = 'encabezado'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
			-->
			<!--
				<h2 class="titulo-seccion center relative upper"><span><? the_title();?></span></h2>
			-->
			
			<div class="titulo-seccion">
				<div class="container clearfix">
					<div class="row">
						<div class="col-sm-10 col-xs-10 btn-titu-pagina">
							<div class="row">
								<div class="col-sm-3 col-xs-12">
									<h4><a href="#">< Anterior</a></h4>
								</div>
								<div class="col-sm-9 col-xs-12">
									<h2 class="upper"><? the_title();?></h2>
								</div>							
							</div>
						</div>
						<div class="col-sm-2 col-xs-2 icono-pagina">
							<img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-noticia.svg">
						</div>
					</div>
				</div>
			</div>

			<div id="proyecto-educativo" class="container relative">
				<?php
					global $post;
					if ( has_excerpt( $post->ID ) ) {
						$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
					    echo '<div class="center intro">';
					    	if(is_page('proyecto-educativo')){
					    		echo '<img src=""'.get_bloginfo('template_directory').'/img/iconos/ico-globo.svg"><br>';
					    	}
							echo $excerpt;
						echo '</div>';
					} 
				?>
				<div class="row">
					<div class="container relative">
						<div id="desc-departamento" class="clearfix row">
							<?php
								if ( has_post_thumbnail() ) {
									echo '<div class="col-sm-6 col-xs-12">';
								    	echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
								    echo '</div>';
								}
							?>
							<? the_content();?>
						</div>

						<? include_once('modulos/descargas.php');?>
					</div>
				</div>					
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>