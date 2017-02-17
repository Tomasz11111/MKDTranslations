<div class='container-fluid' id='contact-data'>
	<div class='row'>
		<div class='col-lg-4 col-xs-12'>
			<p class='contact-data-par'><?php $value = get_field ('footer_phone_number');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
		<div class='col-lg-4 col-xs-12'>
			<p class='contact-data-par'><?php $value = get_field ('footer_email');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
		<div class='col-lg-4 col-xs-12'>
			<p class='contact-data-par'><?php $value = get_field ('footer_address');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			?></p>
		</div>
	</div>
</div>		

<footer class="container-fluid bg-darkgrey">
	<div class="row">
		<div class='col-xs-12 col-lg-12 col-md-12 col-sm-12 footer-proz'>
			<a href='<?php $value = get_field ('footer_proz_link');
			if ($value) {
				echo $value;
			}
			else {
				echo 'empty'; }
			   ?>'><img src='<?php echo get_template_directory_uri(); ?>/images/proZ.png'/></a>
		</div>
		<div class='col-xs-6 col-lg-6 footer-facebook'>
			<a href='https://www.facebook.com/mkdtranslations/'><img src='<?php echo get_template_directory_uri(); ?>/images/facebook.png'/></a>
		</div>
		<div class='col-xs-6 col-lg-6 footer-linkedin'>
			<a href='https://www.linkedin.com/in/mdziendziura'><img src='<?php echo get_template_directory_uri(); ?>/images/linkedin.png'/></a>
		</div>
		<div class='col-xs-12 col-lg-12 footer-copy'>
			<nav class="navbar hidden-xs">

			  <ul class="nav navbar-nav footer-nav-horizontal">
				<li>
					<a href="#">Home </a>
				</li>
				<li >
				  <a href="#about">About me</a></li>
				<li>
				  <a href="#services">My solutions &amp; services</a></li>
				  <li><a href="#translation">Translation &amp; Localisation</a>
				</li>
				  <li>
				  <a href="#teaching">Learn Polish</a>
				</li>
				  <li>
				  <a href="#teaching">Learn French</a>
				</li>
				<li>
				 <a  href="#contact">Contact</a>
				 </li>
				</ul>
			</nav>	
			<p>&copy; 2012-2017 MKD Translations - Polish language services
			</p>
			<p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
			</p>
			<p>Hero video by <a href='http://www.coverr.co/'>coverr</a>
			</p>
		</div>
			
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>