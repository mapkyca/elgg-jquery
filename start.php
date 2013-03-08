<?php

	/**
	 * Upgrade Elgg JQuery
	 *
	 * @licence GNU Public License version 2
	 * @link http://twitter.github.com/bootstrap/
	 * @link http://www.marcus-povey.co.uk
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 */
	
	function jquery_init()
	{
            elgg_unregister_js('jquery');
            
            elgg_register_js('jquery', elgg_get_config('wwwroot').'mod/jquery/vendor/jquery-1.9.1.min.js');
            elgg_register_js('jquery-migrate', elgg_get_config('wwwroot').'mod/jquery/vendor/jquery-migrate-1.1.1.min.js');
            
            elgg_load_js('jquery');
            elgg_load_js('jquery-migrate');
	}
	
	
	elgg_register_event_handler('init','system','jquery_init');
