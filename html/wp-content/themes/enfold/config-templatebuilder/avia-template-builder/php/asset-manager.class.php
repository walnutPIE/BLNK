<?php
/**
* Allows for asset generation/inclusion like css files and js. Also allows to combine files
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

if ( !class_exists( 'aviaAssetManager' ) ) {

	class aviaAssetManager
	{
		
		var $registered_assets = array('css'=>array(), 'js'=>'array');
		var $builder;
		
		public function __construct( $builder ) 
		{
			$this->builder = $builder;
			
			if(!is_admin())
			{
				add_action('wp_enqueue_scripts', array(&$this, 'show_css') , 10 );
			}
			
		}
		
		public function register_asset( $asset, $data )
		{
			if($data['path'] == "auto") $data['path'] = $this->builder->paths['pluginUrlRoot'].'avia-shortcodes/';
			
			$this->registered_assets[$asset][] = array('name' => $data['name'], 'url' => $data['path'].$data['file'] );
		}
		
		public function show_css()
		{
			//either show all single css files in the correct order or show a combined css file that needs to be generated and safed
			foreach($this->registered_assets['css'] as $file)
			{
				wp_enqueue_style( $file['name'], $file['url'], false ); 
			}
		}

	} // end class

} // end if !class_exists
