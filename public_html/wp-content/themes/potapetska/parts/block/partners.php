<?php
$bg = get_field('partners_bg_color') ?: 'light';
$bg_class = $bg === 'light' ? 'bg-gray-bg' : 'bg-white';
?>
<section class="<?php echo $bg_class; ?> py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/partners-section'); ?>
    </div>
</section>
