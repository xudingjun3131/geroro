<?php


class DWQR_Admin
{
	public function __construct(){	
		
		$this->init();
		
		
	}
	
	
	public function init(){
		
		
		//after_delete_post
		//deleted_post
		//edit_post
		//save_post
		
		
		if(is_admin()){
			
			register_activation_hook(DWQR_BASE_FILE, array($this,'plugin_activate'));	
			register_deactivation_hook(DWQR_BASE_FILE, array($this,'plugin_deactivate'));
			
			//注册相关动作
			
			add_action( 'admin_menu', array($this,'admin_menu') );
			
			add_action( 'admin_init', array($this,'admin_init') );
			//插件设置连接
			add_filter( 'plugin_action_links', array($this,'actionLinks'), 10, 2 );
		}
		
		
		
		//注册插件初始化
		add_action('init',array($this,'plugin_init'));
		
		
	}
	
	function actionLinks( $links, $file ) {
		
		if ( $file != plugin_basename(DWQR_BASE_FILE) )
			return $links;
	
		$settings_link = '<a href="'.menu_page_url( DWQR_Common::$name, false ).'">设置</a>';
	
		array_unshift( $links, $settings_link );
	
		return $links;
	}
	
	function admin_menu(){
		add_options_page(
					'Donate With QRcode 设置',
					'Donate With QRcode',
					'manage_options',
					DWQR_Common::$name,
					array($this,'admin_settings')
				);
	}
	

	function admin_settings(){
		$setting_field = DWQR_Common::$settingField;
		$option_name = DWQR_Common::$optionName;
		$op_sets = get_option( $option_name );
		
		
		include_once( DWQR_PATH.'/settings.php' );
	}
	
	function plugin_activate()
	{
		
	}
	
	function plugin_deactivate()
	{
		
	}
	
	function plugin_init(){
		
		
	}
	
	function admin_init(){
		register_setting(  DWQR_Common::$settingField,DWQR_Common::$optionName );
	}
	
	
}