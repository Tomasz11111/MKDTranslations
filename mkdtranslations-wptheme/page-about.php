<?php 
/*
    Template Name: About
*/
?>




								
				<div class="container-fluid bg-about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about.jpeg')" id="about">
    <div class="row">
        <div class="col-lg-5 col-xs-12 about-left">
            <p class="about-title"><span class="hidden-sm hidden-xs"><?php the_content();?>
								
				</span></p>
            <p class="about-mobile hidden-md hidden-lg hidden-xl"><span><?php $value = get_field ('title_left');
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
?></p>
        </div>
        <div class="col-lg-7 col-xs-12 about-right">
            <p class="about-title-right hidden-sm hidden-xs"> <?php $value = get_field ('title_left');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
            <p class="about-main slideanim"> <?php $value = get_field ('about_main_block');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?><span>English</span>, <span>French</span> and <span>Czech</span></p>
        <p class="about-secondary slideanim"><?php $value = get_field ('about_secondary_block');
if ($value) {
	echo $value;
}
else {
	echo 'empty'; }
?></p>
            <p class="help hidden-xs hidden-sm"><a href="#services"><span>READ</span> HOW I CAN HELP</a></p>
        </div>			
		</div>
    </div>
			
											