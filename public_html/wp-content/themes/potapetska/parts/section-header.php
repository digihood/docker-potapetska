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

$label_color = $scheme === 'dark' ? '#fcdb00' : '#033869';
$heading_color = $scheme === 'dark' ? '#ffffff' : '#033869';
$heading2_color = $scheme === 'dark' ? '#fcdb00' : '#42454e';
$desc_color = $scheme === 'dark' ? 'rgba(226,232,240,0.75)' : '#6b7280';
$center_class = $align === 'center' ? 'text-center' : '';
$flex_center = $align === 'center' ? 'justify-center' : '';
?>
<?php if ($label || $heading) : ?>
<div class="<?php echo $center_class; ?>" style="margin-bottom:64px;">
    <?php if ($label) : ?>
    <div class="section-label <?php echo $flex_center; ?>">
        <div class="section-label-line"></div>
        <span class="section-label-text" style="color:<?php echo $label_color; ?>;"><?php echo esc_html($label); ?></span>
    </div>
    <?php endif; ?>
    <?php if ($heading) : ?>
    <h2 style="color:<?php echo $heading_color; ?>;margin-bottom:16px;">
        <?php echo esc_html($heading); ?>
        <?php if ($heading2) : ?>
        <br><span style="color:<?php echo $heading2_color; ?>;"><?php echo esc_html($heading2); ?></span>
        <?php endif; ?>
    </h2>
    <?php endif; ?>
    <?php if ($description) : ?>
    <p style="color:<?php echo $desc_color; ?>;font-size:1.05rem;max-width:600px;line-height:1.7;<?php echo $align === 'center' ? 'margin:0 auto;' : ''; ?>">
        <?php echo esc_html($description); ?>
    </p>
    <?php endif; ?>
</div>
<?php endif; ?>
