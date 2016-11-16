<?php get_header() ?>

<div class='homepage-hero-module'>
    <div class='video-container'>
        <div class='headline'>
            <p class='headline-text-big'>Linguistic services <span> by </span> MKDTranslations</p>
            <button class='headline-btn'><a href='#contact'>quick quote</a></button>
            <button class='headline-btn'><a href='#about'><span class='btn-text'>about me</span></a></button>

        </div>
        <div class='filter'></div>
        <video autoplay loop class='fillWidth hidden-xs hidden-sm'>
            <source src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/MP4/White-Keyboard.mp4' type='video/mp4' />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/WEBM/White-Keyboard.webm' type='video/webm' />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class='poster hidden-md hidden-lg hidden-xl'>
            <img src='<?php echo get_template_directory_uri(); ?>/White-Keyboard/Snapshots/White-Keyboard.jpg'/>
        </div>
    </div>
</div>
<div class='container-fluid bg-about' style='background-image: url(<?php echo get_template_directory_uri(); ?>/images/about.jpeg)' id='about'>
    <div class='row'>
        <div class='col-lg-5 col-xs-12 about-left'>
            <p class='about-title slideanim-left'><span class='hidden-sm hidden-xs'><?php $value = get_field ('title_right');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</span>
			</p>
            <p class='about-mobile hidden-md hidden-lg hidden-xl'><span><?php $value = get_field ('title_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></span> <?php $value = get_field ('title_right');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
        </div>
        <div class='col-lg-7 col-xs-12 about-right'>
            <p class='about-title-right hidden-sm hidden-xs slideanim'> <?php $value = get_field ('title_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
            <p class='about-main slideanim'> <?php $value = get_field ('about_main_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?><span>English</span>, <span>French</span> and <span>Czech</span></p>
			<p class='about-secondary slideanim'><?php $value = get_field ('about_secondary_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
            <p class='help hidden-xs hidden-sm'><a href='#services'><span>READ</span> HOW I CAN HELP</a>
			</p>
        </div>
   
    </div>
</div>
<div class='container-fluid bg-grey' id='services'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class ='section-title'>
			</h1>
            <p class='section-title-lead'><?php $value = get_field ('services_section_lead');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey' id='services_content'>
    <div class='row row-icons'>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service1_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>Translation and proofreading</h4></div>
            <div class='description'><p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service2_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'></div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'>Revision
				</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service3_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-width'>
			</div>
            <div class='icon_title'>
				<h4 class='icon-headline icon-headline-animation'>Linguistic software testing</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
         
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service4_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>Style guide and glossary creation</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
        </div>
        
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service5_icon');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>Language teaching</h4>
			</div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('service6_icon');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>Cultural consultancy</h4></div>
            <div class='icon_description'>
				<p class='icon-description-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

        </div>
    </div>
</div>

<div class='container-fluid' id='translation'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('translation_section_title');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></h1>
            <p class='section-title-lead'><?php $value = get_field ('translation_section_lead');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
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
    
 <div class='container-fluid bg-grey' id='process'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('process_section_title');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h1>
            <p class='section-title-lead'><?php $value = get_field ('process_section_lead');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey padding' id='process-content'>
    <div class='row'>
        <div class='col-lg-2'></div>
        <div class='col-lg-4'>
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('process_icon1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>High standards</h4></div>
            
            <ul class='high_standards_and_guidelines_list'>
                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_left_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>

                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_left_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>

                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_left_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>

                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_left_4');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>

                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_left_5');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>
            </ul>
        </div>
        <div class='col-lg-4'><div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field ('process_icon2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-height'></div>
            
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'>Guidelines</h4></div>
            <ul class='high_standards_and_guidelines_list'>
                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='check_full hidden'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_right_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>
                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='hidden check_full'><img src='<?php echo get_template_directory_uri()?>/images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_right_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>
                <li><img src='<?php echo get_template_directory_uri()?>/images/check-green.png' class='hidden check_full'><img src='<?php echo get_template_directory_uri()?>.images/check-green-empty.png' class='check_empty'><?php $value = get_field ('process_bullets_right_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></li>
            </ul>

        </div>
        <div class='col-lg-2'></div>
 
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 pricing-buttons'>
			<button class='btn-standard btn-teal' id='btn-pricing'><span>Pricing</span></button>
            <button class='btn-standard btn-teal'><a href='termsandconditions.html'>Terms &amp; conditions</a></button>
        </div>
    </div>
</div>
    
        
        <div class='container-fluid hidden' id='pricing'>
            
             
        <div class='row'>
            
            <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field('pricing_section_title');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h1>
                <div class='closing'><div>X</div></div>
            </div>
            
            <div class='col-lg-4'>    
    
            <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field('pricing1_icon');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline'><?php $value = get_field('pricing_icon_headline_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
                <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
            </div>
            <div class='col-lg-4'>
                <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field('pricing2_icon');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field('pricing_icon headline_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
            </div>
             <div class='col-lg-4'>
                <div class='icon-circle icon-circle-teal'><img src='<?php $value = get_field('pricing3_icon');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field('pricing_icon_headline_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field('pricing_icon_text_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
                 <div class='payments_methods_flex'>
                 <img src='<?php echo get_template_directory_uri()?>/images/PayPal.svg' alt='PayPal logo'><img src='<?php echo get_template_directory_uri()?>/images/Skrill_small.png' alt='Skrill logo'></div>
            </div>
            
            
            </div> 
        </div>
   
          
   
        <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-green'><p class='confidentiality slideanim'><?php $value = get_field ('belt_green');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
    </div>
    </div>
    <div class='container-fluid' id='teaching'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('teaching_section_title');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h1>
            <p class='section-title-lead'><?php $value = get_field ('teaching_section_lead');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
        </div>
    </div>
</div>
    <div class='container-fluid' id='learn-language'>
    <div class='row'>
        <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 french'>
            <div class='outer_bg'>
        <div class='outer_border'>
            <div class='inner_border'><p><?php $value = get_field ('teaching_button_left');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
            </div>
        </div>
        </div>
        <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 polish'>
            <div class='outer_bg'>
        <div class='outer_border'>
            <div class='inner_border'><p><?php $value = get_field ('teaching_button_right');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
            </div></div>
    </div>
</div>
    </div>

-->
<div class='container-fluid bg-grey' id='how_i_teach'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('how_i_teach_section_title');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h1>
            <p class='section-title-lead'><?php $value = get_field ('how_i_teach_section_lead');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
        </div>
    </div>
</div>
<div class='container-fluid bg-grey' id='how_i_teach_icons'>
    <div class='row row-icons'>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_1');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_2');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-height'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_3');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>.</p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_4');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-height'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_4');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_4');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_5');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-width'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_5');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_5');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_6');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?>' class='icon-set-height'></div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_6');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h4></div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_6');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>

        </div>
		 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 pricing-buttons'>
			<button class='btn-standard btn-how-i-teach' id='btn-pricing'><span><?php $value = get_field ('how_i_teach_button_left');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></span></button>
            <button class='btn-standard btn-how-i-teach'><a href='termsandconditions.html'><?php $value = get_field ('how_i_teach_button_right');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></a></button>
        </div>
        
    
    </div>
</div>
 <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-belt bg-belt-purple'><p class='confidentiality slideanim'><?php $value = get_field ('belt_purple');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p></div>
<div class='container-fluid' id='contact'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'><h1 class='section-title'><?php $value = get_field ('contact_section_title');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></h1>
            <p class='section-title-lead'><?php $value = get_field ('contact_section_lead');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
		</div>
	
			 <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 pricing-buttons'>
			<button class='btn-standard btn-grey'><a>Contact form - quick quote</a></button>
        </div>
	</div>
</div>
		<div class='container-fluid hidden' id='form-page'>
			<div class='row'>
		<div class='col-lg-12 col-centered'>
	
			<?php if( function_exists( 'iinclude_page' ) ) iinclude_page( 119 ); ?>
        </div>
	</div>
</div>
		<div class='container-fluid'>
	<div class='row'>
				
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			
					 <div id='googleMap'>
                    </div>
		</div>
	
			
	</div>
</div>
 

		<!--
	<div class='row'>
		<nav class='nav navbar'>
			<ul class='footer-nav-horizontal'>
				<li><a href='#'>home</a></li>
				<li><a href='#about'>about me</a></li>
				<li><a href='#services'>services</a></li>
							
						<li><a href='#translation'>translation and localisation></a>
						<ul>
							
					
						<li><a href='#process'>how I work</a></li>
						<li><a href='#process'>pricing</a></li>
						<li><a href='termsandconditions.html'>terms and conditions</a></li>
					</ul>
				</li>
				<li>
				
						<li><a href='#teaching'>teaching</a><ul>
					
						<li><a href='learnpolish.html'>learn Polish</a></li>
						<li><a href='learnfrench.html'>learn French</a></li>
						<li><a href='#how_i_teach'>how I teach</a></li>
						<li><a href='#process'>pricing</a></li>
						<li><a href='termsandconditions.html'>terms and conditions</a></li>
					</ul>
				</li>

				<li><a href='#blog'>blog</a></li>
				<li><a href='#contact'>contact</a></li>

			</ul>
		</div>
	</div>-->
</footer>
	<!--
    <div class='container-fluid bg-contact' id='contact'>
    <div class='row'>
        <div class='col-lg-5 contact-left'>            
        <p class='contact_left_title'><span>CONTACT</span> ME</p>
                                    <div class='bg-icons'>
                                <i class='icon-location'></i>
                            </div>
                            <ul class='address'>
                                <li>Osadní 869/32</li>
                                <li>170 00 Praha 7</li>
                                <li>Čzech Republic</li>
                            </ul>
                        
                            <div class='bg-icons'>
                                <i class='icon-location'></i>
                            </div>
                            <ul class='address'>
                                <li>Řipska 14</li>
                                <li>130 00 Praha 3</li>
                                <li>Czech Republic</li>
                            </ul>
                        
                        
                            <div class='bg-icons'>
                                <i class='icon-phone'></i>
                            </div>
                            <p> +420 773 596 706</p>
                        
                        
                            <div class='bg-icons'>
                                <i class='icon-mail-alt'></i>
                            </div>
                            <P>info@mkdtranslations.com</P>
                        
                        
                            <div class='bg-icons'>
                                <i class='icon-facebook'></i>
                            </div>
                            <p>/MKDTranslations</p>
                       
                       
                            <div class='bg-icons'>
                                <i class='icon-linkedin'></i>
                            </div>
                            <p>/in/mdziendziura</p>
                        

    </div>
        <div class='col-lg-7'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-12'>
           <div id='googleMap'>
                    </div>
                </div>
            </div>
        </div>
            <form>
                                <div class='form-group'>
                                    <input type='text' class='form-control' id='firstname' placeholder='name'>
                                    <input type='email' class='form-control' id='email' placeholder='e-mail'>
                                </div>
                                <div class='form-group'>
                                    
                                    <input type='tel' class='form-control' id='phone' placeholder='phone number'>
                                    <input type='text' class='form-control' id='company' placeholder='company'>
                                </div>
                                <div class='form-group'>
                                    <select class='empty' id='source'>
                                        <option value='' disabled selected>Source language</option>
                                        <option value='Czech'>Czech</option>
                                        <option value='English'>English</option>
                                        <option value='French'>French</option>
                                        <option value='Polish'>Polish</option>
                                    </select>
                                    <select class=' empty' id='target'>
                                        <option value='' disabled selected>Target language</option>
                                        <option value='Czech'>Czech</option>
                                        <option value='English'>English</option>
                                        <option value='French'>French</option>
                                        <option value='Polish'>Polish</option>
                                    </select>
                                </div>
                                <div class='form-group'>
                                    <textarea class='form-control' rows='2' id='description' placeholder='project description'></textarea>
                                </div>
                                <div class='form-group'>
                                    <label for='deadline'>Deadline:</label>
                                    <input type='date' class='form-control' id='deadline'>
                                </div>
                                <button type='submit' class='btn btn-default btn-submit center-block'>SUBMIT</button>
                            </form>
            
            
        </div>
        

    </div>
</div>-->
    
<?php get_footer();?>