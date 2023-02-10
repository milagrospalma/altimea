<?php
get_header('blog');
?>

	<!-- HEADER -->
	<header class="header">
		<div class="container">
			<h1 class="logo"> <a class="blogo" href="<?php echo get_site_url().'/blog/' ?>"><?php _e('BLOG', 'altimea')?> </a>

                <?php /*<h1 class="site-title"><a href="../index.html">Arbutus</a></h1>-->
            <!--<p class="site-description">responsive wordpress blog</p> */?>

			</h1>

			<div class="valores">
				<div class="valores-in"><?php _e('TECNOLOGÍA', 'altimea')?></div>
				<span class="slashy">/</span>
				<div class="valores-in"><?php _e('ACTUALIDAD', 'altimea')?></div>
				<span class="slashy">/</span>
				<div class="valores-in"><?php _e('PROYECTOS', 'altimea')?></div>
			</div>

		</div>
	</header>
	<!-- HEADER -->


	<div id="owl-example" class="owl-carousel">

        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page'=>8,
            'post_status'   => 'publish',
        );

        $wp_query = new WP_Query($args);
        if($wp_query->have_posts()) {
            while($wp_query->have_posts()){
                $wp_query->the_post();


                ?>

				<!-- owl-carousel -->
				<div class="owl-item">
					<div class="owl-slide-item">
                        <?php

                        if (has_post_thumbnail()) {
                            ?>
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>" style="min-height: 250px">
                            <?php
                        }else{
                            echo '<img src="'.get_template_directory_uri().'/external_developments_assets/blog/images/rail.jpg" alt="'.get_the_title().'">';
                        }
                        ?>



						<div class="entry-header"><span class="meta-date"><?php echo get_the_date(); ?></span>
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							<div class="meta clearfix">
                                <?php

                                if(!empty(get_the_category())){ ?>
									<span class="meta-item meta-category"> Posteado en <a href="<?php  echo get_site_url().'/category/'.get_the_category()[0]->slug.'/'; ?>" rel="category tag"><?php echo get_the_category()[0]->name; ?></a></span>
                                <?php } ?>
							</div>
							<!-- / meta clearfix -->
						</div>
						<!-- entry header -->
					</div>
					<!--owl-slide-itemr -->
				</div>
				<!-- owl-item -->

                <?php
            }
        }
        wp_reset_postdata();
        wp_reset_query();

        ?>
	</div>


	<div class="container">

		<!-- MIDDLE -->
		<div class="middle" >

			<!-- CONTENT -->


			<div class="content">

				<div class="l-fixed">

					<!-- primary -->
					<div class="primary with-sidebar"> <!-- blog-posts-->
						<div class="blog-posts">

							<!-- new post-->
							<h3><?php single_cat_title() ?></h3>

                            <?php
                            while(have_posts()):  the_post();
                                ?>
								<!-- HENTRY-->
								<article class="hentry">
                                    <?php
                                    if (has_post_thumbnail()) {

                                        ?>
										<!--featured-->
										<div class="featured"> <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>"></a></div>
										<!--featured-->
                                        <?php
                                    }
                                    ?>


									<div class="hentry-middle">

										<!--ENTRY-HEADER-->
										<header class="entry-header">

											<!--post header-->
											<div class="post-header"> <span class="cat-links"> <a href="#" title="View all posts in Design" rel="category tag"><?php the_tags() ?></a> </span>
												<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
											<!--post header-->

										</header>
										<!--ENTRY-HEADER-->

										<!--entry-content-->
										<div class="entry-content">
											<p><?php the_excerpt(); ?> <a class="more-link" href="<?php the_permalink(); ?>"> <span class="button">Sigue leyendo ...</span> </a> </p>
											<div class="post-meta" data-activate-socials="true"> <span class="meta-info"><?php echo get_the_date(); ?></span>
												<div class="post-share">
													<a target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>" onclick="popupx(this, event)" class="facebook-share-btn"><i class="fa fa-facebook"></i></a>
													<a target="_blank"  href="http://www.twitter.com/share?url=<?php echo urlencode(get_the_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" onclick="popupx(this, event)"><i class="fa fa-twitter"></i></a>
													<a target="_blank"  href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_the_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary=<?php echo urlencode(get_the_title()); ?>&source=LinkedIn" onclick="popupx(this, event)"><i class="fa fa-linkedin"></i></a>
													<a target="_blank"  href="https://plus.google.com/share?url=<?php echo urlencode(get_the_permalink()); ?>" onclick="popupx(this, event)"><i class="fa fa-google-plus"></i></a>
												</div>
											</div>
										</div>
										<!--entry-content-->

									</div>
									<!--hentry-middle-->

								</article>
								<!-- HENTRY-->
                                <?php
                            endwhile;
                            ?>



							<!-- paging-navigation -->

							<nav class="navigation paging-navigation">
                                <?php echo pagination_numeric_posts_nav(); ?>
							</nav>
							<!-- paging-navigation -->

						</div>
						<!-- blog-posts-->
					</div>
					<!-- primary -->

					<!-- secondary -->
					<div class="secondary widget-area">

                        <?php get_sidebar(); ?>

					</div>
					<!-- secondary -->

				</div>
				<!-- l-fixed -->
			</div>
			<!-- CONTENT -->
		</div>
		<!-- MIDDLE -->
	</div>
	<!-- CONTAINER -->

	<!-- FOOTER -->

	<section class="section section-clientes">
		<div class="section-content-contact">
			<div class="container-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-xs-12 main-map">
							<div class="section-content-contact-map">
								<div class="map-full map-address"></div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="section-content-contact-info">
								<div class="cell-middle country-info country-info__PE">
									<h3><a href="tel:+51 1 222 - 2010">+51 1 222 - 2010</a></h3>
									<address>
										Prol. Arenales 413 Of. 102 <br class="visible-xs"/>San Isidro <br>
										Lima - Perú
									</address>

									<div class="social-buttons">
										<a href="https://www.facebook.com/altimea" target="_blank">
											<span class="icon-facebook" aria-hidden="true"></span>
										</a>
										<a href="https://www.linkedin.com/company/altimea" target="_blank">
											<span class="icon-linkedin" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="cell-middle country-info country-info__CO">
									<h3><a href="tel:+51 1 222 - 2010">+57 317 847 8758</a></h3>
									<address>
										Calle 10 # 80F 40 t2 <br class="visible-xs"/>Apt. 603 <br>
										Bogotá - Colombia
									</address>

									<div class="social-buttons" style="visibility: hidden;">
										<a href="https://www.facebook.com/altimea" target="_blank">
											<span class="icon-facebook" aria-hidden="true"></span>
										</a>
										<a href="https://www.linkedin.com/company/altimea" target="_blank">
											<span class="icon-linkedin" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</div>
							<a href="<?php echo getMapsLink(); ?>" class="btn-map hidden-xs">¿Cómo Llegar?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-address visible-xs">
		<div class="section-content-contact">
			<div class="container-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="section-content-contact-map">
								<div class="map-full map-address-mobile"></div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="clone-contact-info-address">
							</div>
							<a href="<?php echo getMapsLink(); ?>" class="btn-map"><?php _e('¿Cómo Llegar?', 'altimea')?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php wp_footer(); ?>