<?php 
/*
    Template Name: Navigation Left
*/
?>
<?php
if ( is_home() ) :
	get_header();
else :
	get_header( 'pages' );
endif;
?>
<div class="container-fluid" id="terms_title">
            <div class="row">
    <div class="col-lg-12 col-xs-12 subpage-header subpage-header-termsconditions"><p class="subpage-header-title"><span><?php the_title() ?></span></p>
                
            </div>
         </div>
    </div>
 <div class="container-fluid">
        <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 hidden-xs index_container">
                    <ul class="terms_conditions_index nav nav-pills nav-stacked" data-spy="affix" data-offset-top=150 id="terms_sidebar">
						<?php $value = get_field('table_of_contents');
							if ($value) {
								echo $value;
							}
							else {
								echo 'empty';
							}
							?>

                    </ul>
                </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                <?php if ( have_posts() ): while (have_posts() ) : the_post() ;?>
				
				<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>

        </div>
    </div>
</div>
<?php get_footer();?>