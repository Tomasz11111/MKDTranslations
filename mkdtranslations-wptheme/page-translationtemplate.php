<?php 
/*
    Template Name: TranslationTemplate
*/
?>

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php the_title() ?></h1>
            <p class='section-title-lead'>
				<?php
				if ( have_posts() ) while ( have_posts() )
{
the_post();
the_content();}
				?>
			</p>
        </div>
    </div>
</div>
<div class='container-fluid' id='photos'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-tourism-pic pic-square'>
            <div class='portfolio-overlay'><p class='portfolio-overlay-text'>Tourism &amp; hospitality</p><p class='hidden portfolio-overlay-text-hover'>brochures, catalogues, websites, information for guides, guidebooks
                Websites and computers</p></div>

        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-business-pic pic-square'> <div class='portfolio-overlay'>
			<p class='portfolio-overlay-text'>Business
			</p>
			<p class='hidden portfolio-overlay-text-hover'>business correspondence, reports, contracts, CVs</p>
			</div>
        </div>

        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text'>Marketing
				</p>
				<p class='hidden portfolio-overlay-text-hover'>brochures, promotional material, managerial documents, magazine articles, presentations, catalogues, business plans, user’s guides, product descriptions, tables
				</p>
			</div>
        </div>
            
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-technical-pic pic-square hidden'>
			<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text' >Technical
				</p>
				<p class='hidden portfolio-overlay-text-hover'>patents, maintenance instructions, description and catalogues of production
				</p>
			</div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-law-pic pic-square hidden'><div class='portfolio-overlay'><p class='portfolio-overlay-text'>Law</p><p class='hidden portfolio-overlay-text-hover'>legislation, contracts</p></div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio-finance-pic pic-square hidden'><div class='portfolio-overlay'><p class='portfolio-overlay-text'>Finance</p><p class='hidden portfolio-overlay-text-hover'>financial reports</p></div>
        </div>
        
   
        
<div class='col-lg-12 morespecialties'>
   
	<button class='btn-standard btn-teal'><a><?php $value = get_field ('translation_button');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></a></button>
        </div>
    </div>
 </div>