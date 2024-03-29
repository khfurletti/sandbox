<?php
if (!defined('ABSPATH')) { exit(); } // No direct access
?>
@media screen and (min-width:1024px) {
	.woocommerce ul.products li.product { 
		width: 21% !important;
		margin: 2% !important;
		clear: none !important;
	}
	.woocommerce ul.products li.product:nth-child(4n+1) {
		clear: both !important;
	}
}

@media screen and (min-width: 768px) and (max-width: 980px) {
	.woocommerce ul.products li.product.first, .woocommerce ul.products li.product.last {
	  clear: right !important;
	}

	.woocommerce ul.products li.product:nth-child(4n+1) {
		clear: none !important;
	}
}