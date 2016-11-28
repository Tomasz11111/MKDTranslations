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
    <div class="col-lg-12 col-xs-12 terms_conditions_header"><p class="section_title"><span>Terms and conditions</span></p>
                
            </div>
         </div>
    </div>
 <div class="container-fluid">
        <div class="row">
                <div class="col-sm-12 col-lg-3 index_container">
                    <ul class="terms_conditions_index nav nav-pills nav-stacked hidden-xs hidden-xm" data-spy="affix" data-offset-top=150   id="terms_sidebar">
                       <li><a href="#article1">Article I: Introductory provisions</a></li>
                        <li><a href="#article2">Article II: Subject matter of the performance</a></li>
                        <li><a href="#article3">Article III: Translations and proofreading</a>
                            <ol>
                                <li>General provisions</li>
                                <li>Delivery deadline</li>
                                <li>Rights and obligations</li>
                                <li>Complaints</li>
                                <li>Deadline for complaints</li>
                            </ol>
                        </li>
                        <li><a href="#article4">Article IV: Price</a></li>
                        <li><a href="#article5">Article V: Payment terms</a></li>
                        <li><a href="#article6">Article VI: Withdrawal from the contract and compensation for damage</a></li>
                        <li><a href="#article7">Article VII: Final provisions</a></li>
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