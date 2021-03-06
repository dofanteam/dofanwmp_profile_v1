<?php
/**
 * Copyright (c) 2014-2018, www.kuacg.com
 * All right reserved.
 *
 * @since 2.5.0
 * @package Tint-K
 * @author 酷ACG资源网
 * @date 2018/02/14 10:00
 * @link https://www.kuacg.com/18494.html
 */
?>
<!-- 模态二维码框 -->
<div id="siteQrcodes" class="js-qrcode qrcode-modal fadeZoomIn" role="dialog" aria-hidden="true">
    <div class="qr-wrap row">
        <div class="qrcode col-md-6 col-sm-6 col-xs-12">
            <?php if(tt_get_option('tt_site_weixin_qr')) { ?>
                <div class="wx-qr"><img src="<?php echo tt_get_option('tt_site_weixin_qr'); ?>" title="<?php _e('Scan the qrcode image and contact with me', 'tt'); ?>"></div>
            <?php } ?>
        </div>
        <div class="qrcode col-md-6 col-sm-6 col-xs-12">
            <?php if(tt_get_option('tt_site_alipay_qr')) { ?>
                <div class="ali-qr"><img src="<?php echo tt_get_option('tt_site_alipay_qr'); ?>" title="<?php _e('Scan the qrcode image and contact with me', 'tt'); ?>"></div>
            <?php } ?>
        </div>
    </div>
</div>