<?php
$copyright = get_field('footer_copyright', 'option');
$webdesign_text = get_field('footer_webdesign_text', 'option');
$webdesign_url = get_field('footer_webdesign_url', 'option');
?>
    <div style="padding:14px 24px;">
        <div class="container-main flex justify-between items-center flex-wrap gap-2.5">
            <p style="color:rgba(226,232,240,0.3);font-size:0.74rem;margin:0;">
                <?php
                if ($copyright) {
                    echo esc_html(str_replace('{year}', date('Y'), $copyright));
                } else {
                    echo '&copy; ' . date('Y') . ' ' . get_bloginfo('name');
                }
                ?>
            </p>
            <?php if ($webdesign_text && $webdesign_url) : ?>
            <a href="<?php echo esc_url($webdesign_url); ?>" target="_blank" rel="noopener noreferrer" class="footer-link" style="font-size:0.74rem;">
                <?php echo esc_html($webdesign_text); ?>
            </a>
            <?php endif; ?>
        </div>
    </div>
</footer>
