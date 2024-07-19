<?php
/**
 * Loop - Clients Template
 *
 * This template can be overridden by copying it to mytheme/addons-for-elementor/addons/clients/loop.php
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$animate_class = $animation_attr = '';

if ($settings['layout'] == 'grid')
    list($animate_class, $animation_attr) = lae_get_animation_atts($settings['widget_animation']);

$args['animate_class'] = $animate_class;

$args['animation_attr'] = $animation_attr;

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

    $class_attr = 'lae-clients-carousel lae-container';
    $data_attr = ' data-settings=\'' . esc_attr(wp_json_encode($carousel_settings)) . '\'';

else:

    $class_attr = 'lae-uber-grid-container ' . lae_get_grid_classes($settings);

endif;

?>

<div<?php echo esc_attr($dir); ?> class="lae-clients <?php echo esc_attr($class_attr); ?>" <?php echo esc_attr($data_attr); ?>>

    <?php foreach ($settings['clients'] as $client): ?>

        <?php $args['client'] = $client; ?>

        <?php lae_get_template_part("addons/clients/content", $args); ?>

    <?php endforeach; ?>

</div><!-- .lae-clients -->

<div class="lae-clear"></div>