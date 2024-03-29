<?php
if (!defined('ABSPATH')) { exit(); } // No direct access
?>
@media only screen and ( min-width:980px ) {
	#et_mobile_nav_menu { 
		display:block !important; 
	}
	
	body:not(.dbdb_divi_2_4_up) #et_mobile_nav_menu { 
		margin-bottom:20px; 
		margin-top:6px; 
	}
	
	body.dbdb_divi_2_4_up .mobile_menu_bar { 
		margin-top:-6px;
		margin-bottom:-3px; 
	}
	
	#top-menu-nav { display:none; }
	.et-fixed-header #et_mobile_nav_menu { margin-bottom:0; }
	
	/* set the width, and right align */
    #mobile_menu { max-width: 400px; right: 0; left:auto; }
}