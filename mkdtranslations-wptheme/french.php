<?php 
/*
    Template Name: French
*/
?>
<?php
if ( is_home() ) :
	get_header();
else :
	get_header( 'pages' );
endif;
?>
<div class='container-fluid bg-about' style='background-image: url(<?php $value = get_field ('polish_bgimage');
	 if ($value) {
	 echo $value;
	 }
	 else {
	 echo 'empty'; }?>)' id='about'>
    <div class='row'>
		<div class='col-lg-7 col-xs-12 about-left-learn'>
            <p class='learn-polish-title-left hidden-sm hidden-xs slideanim'> <span><?php $value = get_field ('title_left');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
				?></span>
			</p>
            <p class='about-main-learn slideanim'> <?php $value = get_field ('learn_polish_main_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?><span>English</span>, <span>French</span> and <span>Czech</span></p>
			<p class='about-secondary-learn slideanim'><?php $value = get_field ('learn_polish_secondary_block');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?>
			</p>
           </div>
   	
        <div class='col-lg-5 col-xs-12 about-right-learn'>
            <p class='learn-polish-title slideanim-left'><span class='hidden-sm hidden-xs'><?php $value = get_field ('title_right');
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
			<p class='help-learn hidden-xs hidden-sm'><a href='#how_i_teach'><span>READ</span> HOW I TEACH</a>
			</p>
        </div>
	</div>
</div>
 <div class='container-fluid bg-grey' id='how_i_teach'>
    <div class='row-col'>
        <div class='col-lg-12 col-xs-12'>
			<?php if ( have_posts() ): while (have_posts() ) : the_post() ;?><h1 class='section-title'><?php $value = get_field ('how_i_teach_section_title');
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
					echo 'empty';
				}
				?>
			</p>
			<?php endwhile; else: ?>
				<?php endif; ?>
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
				?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_1');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
    	<div class='col	-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_2');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_3');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>.</p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_4');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-width'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_5');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
        <div class='col-xs-12 col-md-6 col-lg-4'>
            <div class='icon-circle icon-circle-purple'><img src='<?php $value = get_field ('how_i_teach_icon_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?>' class='icon-set-height'>
			</div>
            <div class='icon_title'><h4 class='icon-headline icon-headline-animation'><?php $value = get_field ('how_i_teach_icon_headline_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></h4>
			</div>
            <div class='icon_description'><p class='icon-description-text'><?php $value = get_field ('how_i_teach_icon_description_6');
				if ($value) {
					echo $value;
				}
				else {
					echo 'empty'; }
				?></p>
			</div>
        </div>
	</div>
</div>
<div class='container' id='learn-polish-pricing'>
	<div class='row'>
		<div class='col-lg-12'><h1 class='section-title'>Pricing</h1>
			<p class='section-title-lead'>Choose a  payment plan that works for you.</p>
		</div>
		<div class='col-lg-12'>
			<p class='learn-pricing-section'>French lessons in my appartment or via Skype</p></div>
		<div class='col-lg-4'>
			<h3>Slow-paced</h3>
			<table>
				<col>
				<col>
				<col>
				<thead>
					<tr>
						<th>No. of lessons per month  </th>
						<th>Duration</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>4-5 x 60 min</td>
						<td>60 min</td>
						<td>390 Kc</td>
					</tr>
					<tr>
						<td>2-3</td>
						<td>90 min</td>
						<td>560 Kc</td>
					</tr>
				</tbody>
			</table>
			
			</div>
		<div class='col-lg-4'>
		<h3>Standard</h3>
		<table>
			<col>
			<col>
			<col>
			<thead>
				<tr>
					<th>No. of lessons per month  </th>
					<th>Duration</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>6-10</td>
					<td>60 min</td>
					<td>375 Kc</td>
				</tr>
				<tr>
					<td>4-6</td>
					<td>90 min</td>
					<td>545 Kc</td>
				</tr>
			</tbody>
		</table>
		</div>
		<div class='col-lg-4'>
		<h3>Intensive</h3>
			<table>
				<col>
				<col>
				<col>
				<thead>
					<tr>
						<th>No. of lessons per month </th>
						<th>Duration</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>> 10</td>
						<td>60 min</td>
						<td>360Kc</td>
					</tr>
					<tr>
						<td>> 6</td>
						<td>90 min</td>
						<td>530 Kc</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class='col-lg-12'><p class='learn-pricing-section'>French lessons in your company/home/cafe in Prague</p></div>
		<div class='col-lg-4'>
			<h3>Slow-paced</h3>
			<table>
				<col>
				<col>
				<col>
				<thead>
					<tr>
						<th>No. of lessons per month  </th>
						<th>Duration</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>4-5 x 60 min</td>
						<td>60 min</td>
						<td>600 Kc</td>
					</tr>
					<tr>
						<td>2-3</td>
						<td>90 min</td>
						<td>700 Kc</td>
					</tr>
				</tbody>
			</table>
			
			</div>
		<div class='col-lg-4'>
		<h3>Standard</h3>
		<table>
			<col>
			<col>
			<col>
			<thead>
				<tr>
					<th>No. of lessons per month  </th>
					<th>Duration</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>6-10</td>
					<td>60 min</td>
					<td>550 Kc</td>
				</tr>
				<tr>
					<td>4-6</td>
					<td>90 min</td>
					<td>675 Kc</td>
				</tr>
			</tbody>
		</table>
		</div>
		<div class='col-lg-4'>
		<h3>Intensive</h3>
			<table>
				<col>
				<col>
				<col>
				<thead>
					<tr>
						<th>No. of lessons per month </th>
						<th>Duration</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>> 10</td>
						<td>60 min</td>
						<td>500Kc</td>
					</tr>
					<tr>
						<td>> 6</td>
						<td>90 min</td>
						<td>650 Kc</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
            

        
<?php get_footer();?>