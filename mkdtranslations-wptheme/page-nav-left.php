<?php 
/*
    Template Name: Left Nav
*/
?>

<?php get_header(); ?> 

 <div class="container-fluid">
        <div class="row">
                <div class="col-sm-12 col-lg-3 index_container">
                    <ul class="terms_conditions_index nav nav-pills nav-stacked hidden-xs hidden-xm" data-spy="affix" data-offset-top=150 id="terms_sidebar">
                        <li></li>
                        <li></li>
                        <li>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            <div class="col-sm-12 col-lg-9">
                <?php if ( have_posts() ): while (have_posts() ) : the_post() ;?>
				<h1><?php the_title() ;?></h1>
				<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>

        </div>
    </div>
</div>
<?php get_footer();?>