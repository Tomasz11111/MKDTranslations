<?php 
/*
    Template Name: Left Nav
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
    <div class="col-lg-12 col-xs-12 subpage-header subpage-header-termsconditions"><p class="section_title"><span><?php the_title() ?></span></p>
                
            </div>
         </div>
    </div>
 <div class="container-fluid">
        <div class="row">
                <div class="col-sm-12 col-lg-3 index_container">
                    <ul class="terms_conditions_index nav nav-pills nav-stacked hidden-xs hidden-xm" data-spy="affix" data-offset-top=150 id="terms_sidebar">
						<?php $value = get_field('termsconditions_left_nav');
							if ($value) {
								echo $value;
							}
							else {
								echo 'empty';
							}
							?>

                    </ul>
                </div>
            <div class="col-sm-12 col-lg-9">
                <?php if ( have_posts() ): while (have_posts() ) : the_post() ;?>
				
				<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>

        </div>
    </div>
</div>
<?php get_footer();?>