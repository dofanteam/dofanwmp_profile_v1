<?php
/**
 * Default Page Template
 *
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
<?php tt_get_header(); ?>
    <div id="content" class="wrapper container right-aside">
        <section id="mod-insideContent" class="main-wrap content-section clearfix">
            <!-- 页面 -->
            <?php load_mod('mod.SinglePage'); ?>
            <!-- 边栏 -->
            <?php load_mod('mod.Sidebar'); ?>
        </section>
    </div>
<?php tt_get_footer(); ?>