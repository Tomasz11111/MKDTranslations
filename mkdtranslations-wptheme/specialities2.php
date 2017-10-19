<div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-marketing-pic pic-square'>		<div class='portfolio-overlay '>
				<p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_3');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
			</div>
        </div>
            
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-technical-pic pic-square hidden portfolio-expandable'>
			<div class='portfolio-overlay'>
				<p class='portfolio-overlay-text' ><?php $value = get_field ('translation_speciality_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
				<p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_4');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
				</p>
			</div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-law-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_5');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-lscape-4 portfolio-finance-pic pic-square hidden portfolio-expandable'><div class='portfolio-overlay'><p class='portfolio-overlay-text'><?php $value = get_field ('translation_speciality_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p><p class='hidden portfolio-overlay-text-hover'><?php $value = get_field ('translation_speciality_examples_6');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p></div>
        </div>
	</div>