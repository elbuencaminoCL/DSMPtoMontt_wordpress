<?php
    /*
    Template Name: Departamento
    */
?>

<?php get_header(); ?>

	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
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
		
		
		<div class="intro-page">
			<div class="container">
				<h2>Lorem ipsum dolor sit amet, persius pericula ullamcorper eu ius, sale lucilius adversarium an sea. His ut nibh maluisset scriptorem, et eos modo sint salutandi. Vel nulla tempor sanctus ad, mea ut assum putent oporteat. Mea in dicta eirmod ornatus.</h2>
			</div>
		</div>
		
		<!-- CONTENIDO DEPARTAMENTO -->
			<div id="departamento">
				<div class="container">

					<div class="cuerpo">
						<div class="row"><!--row-->
							
							<?php
								if ( has_post_thumbnail() ) {
									echo '<div class="col-xs-12 col-md-6">';
										echo '<div class="col-xs-12 img-departamento">';
											echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
										echo '</div>';
									echo '</div>';
									
									echo '<div class="col-xs-12 col-md-6">';
										echo '<div class="contenido-cuerpo">';
											echo get_the_content();
										echo '</div>';
									echo '</div>';
								} else {
									echo get_the_content();
								}
							?>
							
							
							<div class="col-xs-12">								
								<!-- Noticas de acerca del departamento-->
								<h3 class="centrado">Noticias del Departamento</h3>
								
								<div class="block-noticias text-center col-xs-12">
									<div class="row">
									
									
										<?php 
											$posts = get_field('_noticias_departamento');
											$exc= apply_filters('the_excerpt', get_post_field('post_excerpt', $posts->ID));
										if( $posts ): ?>
						    				<?php foreach( $posts as $post): ?>
						        			<?php setup_postdata( $post); ?>

										<div class="noticia clearfix text-left col-sm-6 col-xs-12">
											<div class="texto">
												<h4><a href="<? the_permalink();?>"><?php the_title(); ?></a></h4>
												<?
													if($excerpt) {
														echo '<p class="hidden-xs">'.$excerpt.'</p>';
													} else {
														echo '<p class="hidden-xs">'.content(20).'</p>';
													}
												?>
												
												<h5><? the_date();?></h5>
												<a class="ver-mas" href="<? the_permalink();?>"><span class="caret"></span></a>	
											</div>									
										</div>
										
											<?php wp_reset_postdata(); ?>
											<?php endforeach; ?>
						    
										<?php endif; ?>
										

										<a href="<?php bloginfo('wpurl'); ?>/noticias/" class="ver-todos">Ver todas las Noticias</a>
									</div>
																	
								</div><!-- /Fin de noticias acerca del departamento-->

							</div>
								

							

						</div><!--/row-->
					</div>

															

				</div>
			</div><!-- /FIN CONTENIDO DEPARTAMENTO -->
		
		
		
		

		<?php endwhile; else: ?>
        <div class="col-xs-12">
        	<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
        </div>
		<?php endif; ?>
        
        
	</div><!--/main-->
	
<?php get_footer(); ?>