<?php


class DWQR_Front{	
	
	public function __construct(){	
		
		$this->init();
	}
	public function init(){
		add_filter('the_content',array($this,'the_content'),30);
		add_action('wp_footer', array($this,'downStyle'),30);
	}
	
	public function the_content($content){
	  if(is_single()) {     
		$content .= $this->donateHtml();
	  }
	  return $content;
	}
	
	private function donateHtml(){
		//配置
		$set = get_option( DWQR_Common::$optionName );
		//print_r($op_sets);
		$isopen = false;
		if(empty($set))return '';
		$pays = array('wechat'=>'微信支付','alipay'=>'支付宝','paypal'=>'');
		foreach($pays as $k=>$v){
			if(isset($set[$k]) && $set[$k]){
				$isopen = true;
				break;
			}
		}
		
		if(!$isopen)return '';
		
		$tpl = 'standard';
		
		ob_start();
		
		if(isset($set['stype']) && $set['stype'])$tpl = $set['stype'];
		
		include( DWQR_PATH.'/tpl/'.$tpl.'.php' );
		
		$html = ob_get_clean ();
		
		return $html;
	}
	
	

	
	//内容下载样式
	function downStyle(){
		echo '<script type="text/javascript" language="javascript" src="'.plugins_url("js/wbolt.js", DWQR_BASE_FILE).'"></script>';
	}

}