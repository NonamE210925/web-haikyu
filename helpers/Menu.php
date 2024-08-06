<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbartopleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 'user', 
			'label' => 'User', 
			'icon' => ''
		),
		
		array(
			'path' => 'about', 
			'label' => 'About', 
			'icon' => ''
		),
		
		array(
			'path' => 'video', 
			'label' => 'Episode', 
			'icon' => ''
		),
		
		array(
			'path' => 'karakter', 
			'label' => 'Characters', 
			'icon' => '','submenu' => array(
		array(
			'path' => 'karakter/Index', 
			'label' => 'Characters', 
			'icon' => ''
		),
		
		array(
			'path' => 'teams', 
			'label' => 'Teams', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'video', 
			'label' => 'video', 
			'icon' => '','submenu' => array(
		array(
			'path' => 'video/Index', 
			'label' => 'video', 
			'icon' => ''
		),
		
		array(
			'path' => 'cover_video', 
			'label' => 'Cover Video', 
			'icon' => ''
		)
	)
		)
	);
		
			public static $navbartopright = array(
		array(
			'path' => '#home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => '#about', 
			'label' => 'About', 
			'icon' => ''
		),
		
		array(
			'path' => '#teams', 
			'label' => 'Teams', 
			'icon' => ''
		),
		
		array(
			'path' => '#karakter', 
			'label' => 'Chracters', 
			'icon' => ''
		),
		
		array(
			'path' => '#video', 
			'label' => 'Episodes', 
			'icon' => ''
		),
		
		array(
			'path' => '#qoutes', 
			'label' => 'Quotes', 
			'icon' => ''
		)
	);
		
	
	
			public static $jenis_kelamin = array(
		array(
			"value" => "Laki - Laki", 
			"label" => "Laki - Laki", 
		),
		array(
			"value" => "Prempuan", 
			"label" => "Prempuan", 
		),);
		
			public static $posisi = array(
		array(
			"value" => "Server", 
			"label" => "Server", 
		),
		array(
			"value" => "Tosser", 
			"label" => "Tosser", 
		),
		array(
			"value" => "Smasher", 
			"label" => "Smasher", 
		),
		array(
			"value" => "Blocker", 
			"label" => "Blocker", 
		),
		array(
			"value" => "Cover", 
			"label" => "Cover", 
		),
		array(
			"value" => "Libero", 
			"label" => "Libero", 
		),
		array(
			"value" => "Assisten", 
			"label" => "Assisten", 
		),);
		
}