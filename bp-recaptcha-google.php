<?php

/*
Code by Merksk8
GitHub=> https://github.com/merksk8/
Website=> https://codecomas.com

1. Add this to functions.php of your child theme or custom plugin
2. Get your free key at https://www.google.com/recaptcha/intro/index.html
3. Change "ENTER YOUR GOOGLE RECAPTCHA KEY" for your key

*/



function google_recaptcha_header(){
	
	?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php
			
}
add_action( 'wp_head', 'google_recaptcha_header');

function google_recaptcha_buddypress(){
	
	?>
	<div class="g-recaptcha" data-sitekey="ENTER YOUR GOOGLE RECAPTCHA KEY"></div>
	<?php
	
}
add_action( 'bp_before_registration_submit_buttons', 'google_recaptcha_buddypress');

 ?>