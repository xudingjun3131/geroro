<link rel="stylesheet" type="text/css" media="screen" href="<?php echo plugins_url("css/style.css", DWQR_BASE_FILE)?>" />
<a class="wbolt-btn wbolt-btn-simple" id="J_wboltDonateBtn">
    <i class="wbolt-icon-tick"></i>
    <span>去打赏</span>
</a>

<div class="wbolt-donate-popup" id="J_popUpWB">
    <a class="wbolt-btn-close" id="J_closeBtn"><i class="wbolt-icon-close"></i></a>
    <p><strong>您的支持将鼓励我们继续创作！</strong></p>
    <div class="wbolt-tab-box" id="J_tabBox">
        <div class="wbolt-tab-nav">
        <?php foreach($pays as $k=>$v){
			$href = '';
			if(!isset($set[$k]) || !$set[$k])continue;
			if($k=='paypal' && $set['paypal_url'])$href = ' url="'.$set['paypal_url'].'"';
			?>
        <div class="wbolt-tab-item"<?php echo $href;?>><a><i class="wbolt-icon-<?php echo $k;?>"></i> <?php echo $v;?></a></div>
        <?php } ?>
        </div>
        <?php if(isset($set['wechat']) && $set['wechat']){?>
        <div class="wbolt-tab-cont">
            <img src="<?php echo $set['wechat_qrcode'];?>" width="240" height="240">
            <p>用 <span class="wbolt-hl">[微信]</span> 扫描二维码打赏</p>
        </div>
        <?php } ?>
        <?php if(isset($set['alipay']) && $set['alipay']){?>
        <div class="wbolt-tab-cont">
            <img src="<?php echo $set['alipay_qrcode'];?>" width="240" height="240">
            <p>用 <span class="wbolt-hl">[支付宝]</span> 扫描二维码打赏</p>
        </div>
        <?php } ?>        
        <?php if(isset($set['paypal']) && $set['paypal']){?>
        <div class="wbolt-tab-cont">
            正在跳转到PayPal...
        </div>
        <?php } ?>
    </div>
</div>
<div class="overlay" id="J_maskWB"></div>

