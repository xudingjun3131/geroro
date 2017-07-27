<?php 
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('my-upload');
        wp_enqueue_style('thickbox'); 
    ?>   
<div class="wrap" id="poststuff">
	<h1>打赏设置</h1>
	<form method="post" action="options.php">
		<?php 
		settings_fields( $setting_field );
		 ?>
        <!-- 支付方式 S-->
        <div class="postbox-container">
            <div class="postbox">
                <h3 class="hndle">
                    <span>支付方式</span>
                </h3>
                <div class="inside">
                    <ul>
                        <li>
                            <label>
                                <input type="checkbox" id="<?php echo $option_name;?>_paypal" name="<?php echo $option_name;?>[paypal]" value="1">
                                PayPal支付
                            </label>
                        </li>
                        <li>
                            <label>
                                付款链接：
                                <input type="text" id="<?php echo $option_name;?>_paypal_url" name="<?php echo $option_name;?>[paypal_url]" value="<?php echo isset($op_sets['paypal_url'])?$op_sets['paypal_url']:'';?>"/>
                            </label>
                            <p><a href="http://www.wbolt.com/blog/?p=39" target="_blank">如何生成PayPal捐赠链接</a></p>
                        </li>
                    </ul>
                  

                    <ul>
                        <li>
                            <label>
                                <input type="checkbox" id="<?php echo $option_name;?>_wechat" name="<?php echo $option_name;?>[wechat]" value="1">
                                微信支付（适用于PC端及移动端微信内置浏览器）
                            </label>
                        </li>
                        <li>
                            <img id="wechat_qrcode_img" src="<?php echo isset($op_sets['wechat_qrcode'])?$op_sets['wechat_qrcode']:'';?>" style="width:200px; height:200px; background-color:#ccc" width="200" height="200">
                        </li>
                        <li><input type="hidden" id="wechat_qrcode" name="<?php echo $option_name;?>[wechat_qrcode]" value="<?php echo isset($op_sets['wechat_qrcode'])?$op_sets['wechat_qrcode']:'';?>"/>
                            <button type="button" class="button media-button  select-mode-toggle-button">上传二维码</button>
                            <a style="margin-left:20px; line-height:2;" href="http://www.wbolt.com/blog/?p=59" target="_blank">如何生成二维码</a>
                        </li>
                    </ul>
                    
                    <ul>
                        <li>
                            <label>
                                <input type="checkbox" id="<?php echo $option_name;?>_alipay" name="<?php echo $option_name;?>[alipay]" value="1">
                                支付宝支付（仅适用于PC端，移动端即将开通）
                            </label>
                        </li>
                        <li>
                            <img id="alipay_qrcode_img" src="<?php echo isset($op_sets['alipay_qrcode'])?$op_sets['alipay_qrcode']:'';?>" style="width:200px; height:200px; background-color:#ccc" width="200" height="200">
                        </li>
                        <li><input type="hidden" id="alipay_qrcode" name="<?php echo $option_name;?>[alipay_qrcode]" value="<?php echo isset($op_sets['alipay_qrcode'])?$op_sets['alipay_qrcode']:'';?>"/>
                            <button type="button" class="button media-button  select-mode-toggle-button">上传二维码</button>
                            <a style="margin-left:20px; line-height:2;" href="http://www.wbolt.com/blog/?p=47" target="_blank">如何生成二维码</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 支付方式 E-->

        <!-- 广告位设置 S-->
        <div class="postbox-container">
            <div class="postbox">
                <h3 class="hndle">
                    <span>打赏文案设置</span>
                </h3>
                <div class="inside">
                    <label>请设置打赏的文案，20字以内（选填）</label>
                    <textarea class="large-text code" rows="2" placeholder="如：很喜欢这篇文章，打赏犒劳下作者，以此激励作者创作更多！" id="<?php echo $option_name;?>_title" name="<?php echo $option_name;?>[title]"><?php echo isset($op_sets['title'])?$op_sets['title']:'';?></textarea>
                </div>
            </div>
        </div>
        <!-- 广告位设置 E-->
        
        <div class="postbox-container">
            <div class="postbox">
                <h3 class="hndle">
                    <span>打赏模板选择</span>
                </h3>
              <div class="inside">                
                <input type="radio" name="<?php echo $option_name;?>[stype]" id="stype_standard" value="standard">
                    <label for="stype_standard">标准</label>
                   
                <input type="radio" name="<?php echo $option_name;?>[stype]" id="stype_simple" value="simple">
                    <label for="stype_simple">简单</label>
                </div>
            </div>
        </div>

        <div class="postbox-container">
            <p class="submit">
                <input type="submit"
                       name="Submit"
                       class="button-primary"
                       value="保存" />
            </p>
        </div>
	</form>
</div>
<script>
    jQuery(document).ready(function() {
		var cur = null;
        jQuery('.media-button').click(function() {
			 //formfield = jQuery('#upload_image').attr('name');
			 // show Wordpress' uploader modal box
			 cur = jQuery(this);
			 tb_show('', '<?php echo admin_url(); ?>media-upload.php?type=image&TB_iframe=true');
			 return false;
        });
        window.send_to_editor = function(html) {
		html = '<div>'+html+'</div>';		
         // this will execute automatically when a image uploaded and then clicked to 'insert to post' button
         imgurl = jQuery('img',html).attr('src');
         // put uploaded image's url to #upload_image
         //jQuery('#upload_image').val(imgurl);
		 var ipt = cur.prev('input');
		 ipt.val(imgurl);
		 var curpp = cur.parent().parent();
		 //jQuery('#' + ipt.attr('id')+'_img').attr('src',imgurl);
		 curpp.find('img').attr('src',imgurl);
		 curpp.find(':checkbox').prop('checked',true);
         tb_remove();
        }
    });

    jQuery(document).ready(function($){
        jQuery('#J_displayBtn').click(function(){
            $(this).parent().toggleClass('closed');
        });
		<?php if(isset($op_sets['paypal']) && $op_sets['paypal']){?>
		jQuery('#<?php echo $option_name;?>_paypal').prop('checked',true);
		<?php } ?>
		<?php if(isset($op_sets['alipay']) && $op_sets['alipay']){?>
		jQuery('#<?php echo $option_name;?>_alipay').prop('checked',true);
		<?php } ?>
		<?php if(isset($op_sets['wechat']) && $op_sets['wechat']){?>
		jQuery('#<?php echo $option_name;?>_wechat').prop('checked',true);
		<?php } ?>
		<?php if(isset($op_sets['stype']) && $op_sets['stype']){?>
		jQuery('#stype_<?php echo $op_sets['stype'];?>').prop('checked',true);
		<?php }else{ ?>
		jQuery('#stype_standard').prop('checked',true);
		<?php } ?>
    });
</script>
