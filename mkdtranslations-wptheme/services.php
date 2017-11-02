 <?php
 
 function services($img) {
 ?>
 <div class='col-xs-12 col-xs-lscape-6 col-sm-6 col-md-3 col-lg-2 col-services slideanim col-services__additional'>
            <div class='subsection__container-icon subsection__container-icon--section-services subsection__container-icon--bg-secondary sr'><img class='subsection__icon--section-services hidden-xs sr' src='<?php echo get_template_directory_uri(); ?>/images/revision-blue.png'><img class='hidden-sm hidden-md hidden-lg subsection__icon--section-services' src='<?php echo get_template_directory_uri(); ?>/images/<?php echo $img?>'>
			</div>
            <h4 class='subsection__headline subsection__headline--front-page-services icon-headline-animation sr'><span><?php $value = get_field ('service5_icon_headline');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></span></h4>
			         
				<p class='subsection__text subsection__text--front-page-services sr'><?php $value = get_field ('service5_icon_description');
				if ($value) {
				echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
		
        </div>
		<?php
		}
?>