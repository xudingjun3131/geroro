<?php
/*
Plugin Name: Donate With QRcode
Plugin URI: http://wordpress.org/plugins/donate-with-qrcode/
Description: Donate With QRcode开发的初衷是方便WordPress博主在文章末提供支付宝、微信支付和PayPal多个打赏渠道，方便读者打赏（捐赠）站长以鼓励站长继续创作贡献。
Author: wbolt
Version: 0.1.1
Author URI: http://www.wbolt.com/
*/
define('DWQR_PATH',dirname(__FILE__));
define('DWQR_BASE_FILE',__FILE__);

require_once DWQR_PATH.'/classes/common.class.php';
require_once DWQR_PATH.'/classes/admin.class.php';
require_once DWQR_PATH.'/classes/front.class.php';
new DWQR_Admin();
new DWQR_Front();
