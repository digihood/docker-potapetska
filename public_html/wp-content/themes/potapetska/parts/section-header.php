<?php
/**
 * Shared section header component
 *
 * @param string $args['label'] - The small label text
 * @param string $args['heading'] - Main heading
 * @param string $args['heading2'] - Optional second heading line
 * @param string $args['description'] - Optional description
 * @param string $args['scheme'] - 'light' or 'dark' (default: 'light')
 * @param string $args['align'] - 'left' or 'center' (default: 'left')
 */
$label = $args['label'] ?? '';
$heading = $args['heading'] ?? '';
$heading2 = $args['heading2'] ?? '';
$description = $args['description'] ?? '';
$scheme = $args['scheme'] ?? 'light';
$align = $args['align'] ?? 'left';

$is_dark = $scheme === 'dark';
$center_class = $align === 'center' ? 'text-center' : '';
$flex_center = $align === 'center' ? 'justify-center' : '';
?>
<?php if ($label || $heading) : ?>
<div class="<?php echo $center_class; ?> mb-16">
    <?php if ($label) : ?>
    <div class="section-label <?php echo $flex_center; ?>">
        <div class="section-label-line"></div>
        <span class="section-label-text <?php echo $is_dark ? 'text-yellow' : 'text-primary'; ?>"><?php echo esc_html($label); ?></span>
    </div>
    <?php endif; ?>
    <?php if ($heading) : ?>
    <h2 class="<?php echo $is_dark ? 'text-white' : 'text-primary'; ?> mb-4">
        <?php echo esc_html($heading); ?>
        <?php if ($heading2) : ?>
        <br><span class="<?php echo $is_dark ? 'text-yellow' : 'text-gray-dark'; ?>"><?php echo esc_html($heading2); ?></span>
        <?php endif; ?>
    </h2>
    <?php endif; ?>
    <?php if ($description) : ?>
    <p class="<?php echo $is_dark ? 'text-[rgba(226,232,240,0.75)]' : 'text-gray-body'; ?> text-[1.05rem] max-w-[600px] leading-[1.7] <?php echo $align === 'center' ? 'mx-auto' : ''; ?>">
        <?php echo esc_html($description); ?>
    </p>
    <?php endif; ?>
</div>
<?php endif; ?>
