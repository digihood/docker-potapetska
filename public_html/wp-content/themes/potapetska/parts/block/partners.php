<?php
$bg = get_field('partners_bg_color') ?: 'light';
$bg_color = $bg === 'light' ? '#f0f2f5' : '#ffffff';
?>
<section style="background:<?php echo $bg_color; ?>;padding:100px 0;">
    <div class="container-main">
        <?php get_template_part('parts/partners-section'); ?>
    </div>
</section>
