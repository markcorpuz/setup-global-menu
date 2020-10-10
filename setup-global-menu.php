<?php
/**
 * Plugin Name: SETUP Global Menu
 * Description: Places a simple HTML based global menu on the footer
 * Version: 1.0.1
 * Author: Mark Corpuz
 * Author URI: https://markcorpuz.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'genesis_footer', 'setup_global_menu' );
function setup_global_menu() {
	?>
	<style>
		.globalmenu {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: flex-start;
		}
	</style>
	<aside class="module globalmenu sidebar-primary">
		<div class="margin-right margin-bottom">
			<div class="fontsize-smaller margin-bottom" style="font-weight:700;">BSR Dashboard</div>
			<ul class="fontsize-smaller menu">
				<li class="menu-item"><a href="https://basestructure.com/">BSR</a> | <a href="https://basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://spk.basestructure.com/">spk.BSR</a> | <a href="https://spk.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://swp.basestructure.com/">swp.BSR</a> | <a href="https://swp.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://dyb.basestructure.com/">dyb.BSR</a> | <a href="https://dyb.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://model.basestructure.com/">model.BSR</a> | <a href="https://model.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://setup.basestructure.com/">setup.BSR</a> | <a href="https://setup.basestructure.local/">LOCAL</a></li>
			</ul>
		</div>
		<div class="margin-right margin-bottom">
			<div class="fontsize-smaller margin-bottom" style="font-weight:700;">SETUP</div>
			<ul class="fontsize-smaller menu">
				<li class="menu-item"><a href="https://setup.basestructure.com/">setup.BSR</a> | <a href="https://setup.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://setup-be.basestructure.com/">setup-be.BSR</a> | <a href="https://setup-be.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://setup-child.basestructure.com/">setup-child.BSR</a> | <a href="https://setup-child.basestructure.local/">LOCAL</a></li>
				<li class="menu-item menu-item-has-children">
					<a href="https://theme-setup.basestructure.com/">theme-setup.BSR</a> | <a href="https://theme-setup.basestructure.local/">LOCAL</a>
					<ul class="sub-menu">
						<li class="menu-item"><a href="https://theme-setup.basestructure.com/menu-default/">/menu-default</a> | <a href="https://theme-setup.basestructure.local/menu-default/">LOCAL</a></li>
						<li class="menu-item"><a href="https://theme-setup.basestructure.com/content-default/">/content-default</a> | <a href="https://theme-setup.basestructure.local/content-default/">LOCAL</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="margin-right margin-bottom">
			<div class="fontsize-smaller margin-bottom" style="font-weight:700;">MODEL</div>
			<ul class="fontsize-smaller menu">
				<li class="menu-item"><a href="https://model-atl.basestructure.com/">model-atl.BSR</a> | <a href="https://model-atl.basestructure.local/">LOCAL</a></li>
				<li class="menu-item"><a href="https://model-sal.basestructure.com/">model-sal.BSR</a> | <a href="https://model-sal.basestructure.local/">LOCAL</a></li>
			</ul>
		</div>
	</aside>
	<?php
}