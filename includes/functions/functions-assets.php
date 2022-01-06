<?php 
// Site scripts
add_action("wp_enqueue_scripts", "woodsmith_scripts");
function woodsmith_scripts(){
	wp_enqueue_script( 'allscripts', WOODSMITH_URI . '/assets/scripts/js/dist/allscripts.js', array(), WOODSMITH_VERSION, true );

}

// Site Styles
add_action('wp_enqueue_scripts','woodsmith_styles');
function woodsmith_styles(){
	wp_enqueue_style( 'allstyles', WOODSMITH_URI . '/assets/styles/dist/allstyles.css', array(), WOODSMITH_VERSION);
}
