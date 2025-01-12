<?php
/**
 * Loop - Services Template
 *
 * This template can be overridden by copying it to mytheme/addons-for-elementor/addons/services/loop.php
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

?>

<?php

$class_attr = $data_attr = '';
$dir = is_rtl() ? ' dir="rtl"' : '';

if ($settings['layout'] == 'carousel') :

    $carousel_settings = [
        'arrows' => ('yes' === $settings['arrows']),
        'dots' => ('yes' === $settings['dots']),
        'autoplay' => ('yes' === $settings['autoplay']),
        'autoplay_speed' => absint($settings['autoplay_speed']),
        'animation_speed' => absint($settings['animation_speed']),
        'pause_on_hover' => ('yes' === $settings['pause_on_hover']),
        'adaptive_height' => ('yes' === $settings['adaptive_height']),
    ];

    $responsive_settings = [
        'display_columns' => absint($settings['display_columns']),
        'scroll_columns' => absint($settings['scroll_columns']),
        'tablet_width' => absint($settings['tablet_width']),
        'tablet_display_columns' => absint($settings['tablet_display_columns']),
        'tablet_scroll_columns' => absint($settings['tablet_scroll_columns']),
        'mobile_width' => absint($settings['mobile_width']),
        'mobile_display_columns' => absint($settings['mobile_display_columns']),
        'mobile_scroll_columns' => absint($settings['mobile_scroll_columns']),
    ];

    $carousel_settings = array_merge($carousel_settings, $responsive_settings);

    $class_attr = 'lae-services-carousel lae-container';
    $data_attr = ' data-settings=\'' . esc_attr(wp_json_encode($carousel_settings)) . '\'';

else:

    $class_attr = 'lae-uber-grid-container ' . lae_get_grid_classes($settings);

endif;

?>

<div<?php echo esc_attr($dir); ?> class="lae-services lae-services-<?php echo esc_attr($settings['style']); ?> <?php echo esc_attr($class_attr); ?>" <?php echo esc_attr($data_attr); ?>>

    <?php foreach ($settings['services'] as $index => $service): ?>

        <?php $args['index'] = $index; ?>

        <?php $args['service'] = $service; ?>

        <?php lae_get_template_part("addons/services/content", $args); ?>

    <?php endforeach; ?>

</div><!-- .lae-services -->

<div class="lae-clear"></div>