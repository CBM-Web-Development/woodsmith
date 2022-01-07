<?php 
define('WOODSMITH_URI', get_template_directory_uri());
define('WOODSMITH_PATH', get_template_directory());
define('WOODSMITH_TEXTDOMAIN', 'woodsmith');
define('WOODSMITH_VERSION', '2.0.0');

// Include required functions --REQUIRED
include WOODSMITH_PATH . '/includes/functions/functions-assets.php';
include WOODSMITH_PATH . '/includes/functions/functions-supports.php';
include WOODSMITH_PATH . '/includes/functions/functions-localize.php';
include WOODSMITH_PATH . '/includes/functions/functions-sidebars.php';
include WOODSMITH_PATH . '/includes/functions/functions-menus.php';

// NavBar walker for Bootstrap --REQUIRED
include WOODSMITH_PATH . '/includes/classes/class-bootstrap-5-walker.php';


